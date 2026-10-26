<?php

namespace Tests\Feature;

use Tests\TestCase;

class PosPagesTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        config(['session.driver' => 'array', 'cache.default' => 'array']);
    }

    public function test_all_four_pages_render_and_link_to_each_other(): void
    {
        foreach (['/', '/about', '/customers', '/users'] as $path) {
            $response = $this->get($path)->assertOk()->assertSee('Counterpoint');

            foreach (['home', 'about', 'customers.index', 'users.index'] as $name) {
                $response->assertSee('href="'.route($name).'"', false);
            }
        }
    }

    public function test_customer_array_is_rendered_in_the_directory(): void
    {
        $response = $this->get('/customers')->assertOk()->assertViewIs('customers.index');
        $rows = $response->viewData('customers');

        $this->assertIsArray($rows);
        $this->assertGreaterThanOrEqual(5, count($rows));
        $this->assertCount(count($rows), array_unique(array_column($rows, 'id')));

        foreach ($rows as $row) {
            foreach ($row as $value) {
                $response->assertSee($value);
            }
        }
    }

    public function test_user_array_is_rendered_in_the_directory(): void
    {
        $response = $this->get('/users')->assertOk()->assertViewIs('users.index');
        $rows = $response->viewData('users');

        $this->assertIsArray($rows);
        $this->assertGreaterThanOrEqual(5, count($rows));
        $this->assertCount(count($rows), array_unique(array_column($rows, 'id')));

        foreach ($rows as $row) {
            $this->assertArrayNotHasKey('password', $row);
            foreach ($row as $value) {
                $response->assertSee($value);
            }
        }
    }
}
