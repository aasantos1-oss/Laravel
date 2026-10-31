<?php

namespace Tests\Feature;

use App\Models\Customer;
use App\Models\User;
use Database\Seeders\PosSeeder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PosPagesTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed(PosSeeder::class);
    }

    public function test_four_pages_render_and_link_to_each_other(): void
    {
        foreach (['/', '/about', '/customers', '/users'] as $path) {
            $response = $this->get($path)->assertOk();

            foreach (['home', 'about', 'customers.index', 'users.index'] as $name) {
                $response->assertSee('href="'.route($name).'"', false);
            }
        }
    }

    public function test_seeder_populates_both_required_tables(): void
    {
        $this->assertDatabaseCount('customers', 5);
        $this->assertDatabaseCount('users', 5);
        $this->assertDatabaseHas('customers', [
            'full_name' => 'Isabel Reyes',
            'email' => 'isabel.reyes@example.com',
            'phone' => '0917 000 0001',
        ]);
        $this->assertDatabaseHas('users', [
            'username' => 'alex.rivera',
            'full_name' => 'Alex Rivera',
        ]);
    }

    public function test_seeding_twice_keeps_the_same_records_and_passwords(): void
    {
        $originalHash = User::where('username', 'alex.rivera')->firstOrFail()->password;
        $this->seed(PosSeeder::class);

        $this->assertDatabaseCount('customers', 5);
        $this->assertDatabaseCount('users', 5);
        $this->assertSame($originalHash, User::where('username', 'alex.rivera')->firstOrFail()->password);
    }

    public function test_customer_page_uses_live_eloquent_records(): void
    {
        $customer = Customer::create([
            'full_name' => 'New Database Customer',
            'email' => 'new.customer@example.com',
            'phone' => '0918 123 4567',
        ]);

        $response = $this->get('/customers')->assertOk()->assertViewIs('customers.index');
        $response->assertViewHas('customers', fn ($rows) =>
            $rows instanceof Collection && $rows->contains('id', $customer->id)
        );
        $response->assertSee('New Database Customer')->assertSee('new.customer@example.com')->assertSee('0918 123 4567');

        $customer->update(['full_name' => 'Updated Database Customer']);
        $this->get('/customers')->assertOk()->assertSee('Updated Database Customer')->assertDontSee('New Database Customer');
    }

    public function test_user_page_uses_live_eloquent_records(): void
    {
        $user = User::factory()->create([
            'username' => 'new.database.user',
            'full_name' => 'New Database User',
            'name' => 'New Database User',
        ]);

        $response = $this->get('/users')->assertOk()->assertViewIs('users.index');
        $response->assertViewHas('users', fn ($rows) =>
            $rows instanceof Collection && $rows->contains('id', $user->id)
        );
        $response->assertSee('new.database.user')->assertSee('New Database User');

        $user->update(['full_name' => 'Updated Database User']);
        $this->get('/users')->assertOk()->assertSee('Updated Database User')->assertDontSee('New Database User');
    }

    public function test_username_uniqueness_is_enforced_by_the_database(): void
    {
        $this->expectException(QueryException::class);
        User::factory()->create(['username' => 'alex.rivera']);
    }

    public function test_empty_tables_have_clear_empty_states(): void
    {
        Customer::query()->delete();
        User::query()->delete();

        $this->get('/customers')->assertOk()->assertSee('No customers found.');
        $this->get('/users')->assertOk()->assertSee('No users found.');
    }

    public function test_record_text_is_escaped_in_blade(): void
    {
        $name = '<script>alert("example")</script>';
        Customer::create([
            'full_name' => $name,
            'email' => 'escaped.record@example.com',
            'phone' => '0918 000 0000',
        ]);

        $this->get('/customers')->assertOk()
            ->assertSee($name)
            ->assertDontSee($name, false);
    }
}
