<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        $customers = [
            ['full_name' => 'Isabel Reyes', 'email' => 'isabel.reyes@example.com', 'phone' => '0917 000 0001'],
            ['full_name' => 'Miguel Santos', 'email' => 'miguel.santos@example.com', 'phone' => '0917 000 0002'],
            ['full_name' => 'Sofia Cruz', 'email' => 'sofia.cruz@example.com', 'phone' => '0917 000 0003'],
            ['full_name' => 'Gabriel Mendoza', 'email' => 'gabriel.mendoza@example.com', 'phone' => '0917 000 0004'],
            ['full_name' => 'Camille Garcia', 'email' => 'camille.garcia@example.com', 'phone' => '0917 000 0005'],
        ];

        foreach ($customers as $customer) {
            Customer::updateOrCreate(
                ['email' => $customer['email']],
                ['full_name' => $customer['full_name'], 'phone' => $customer['phone']],
            );
        }
    }
}
