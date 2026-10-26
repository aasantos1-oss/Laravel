<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PosDemoSeeder extends Seeder
{
    public function run(): void
    {
        // Re-running this seeder updates the same five fictional records.
        // These snapshots do not replace the required arrays in the controllers.
        DB::transaction(function () {
            DB::table('pos_demo_customers')->upsert([
                ['id' => 'CUS-001', 'name' => 'Isabel Reyes', 'email' => 'isabel.reyes@example.com', 'phone' => '0917 000 0001', 'city' => 'Paranaque', 'status' => 'Active'],
                ['id' => 'CUS-002', 'name' => 'Miguel Santos', 'email' => 'miguel.santos@example.com', 'phone' => '0917 000 0002', 'city' => 'Muntinlupa', 'status' => 'Active'],
                ['id' => 'CUS-003', 'name' => 'Sofia Cruz', 'email' => 'sofia.cruz@example.com', 'phone' => '0917 000 0003', 'city' => 'Las Pinas', 'status' => 'Inactive'],
                ['id' => 'CUS-004', 'name' => 'Gabriel Mendoza', 'email' => 'gabriel.mendoza@example.com', 'phone' => '0917 000 0004', 'city' => 'Taguig', 'status' => 'Active'],
                ['id' => 'CUS-005', 'name' => 'Camille Garcia', 'email' => 'camille.garcia@example.com', 'phone' => '0917 000 0005', 'city' => 'Makati', 'status' => 'Active'],
            ], ['id'], ['name', 'email', 'phone', 'city', 'status']);
            DB::table('pos_demo_users')->upsert([
                ['id' => 'USR-001', 'name' => 'Alex Rivera', 'email' => 'alex.rivera@example.com', 'role' => 'Administrator', 'status' => 'Active'],
                ['id' => 'USR-002', 'name' => 'Bea Torres', 'email' => 'bea.torres@example.com', 'role' => 'Manager', 'status' => 'Active'],
                ['id' => 'USR-003', 'name' => 'Carlo Ramos', 'email' => 'carlo.ramos@example.com', 'role' => 'Cashier', 'status' => 'Active'],
                ['id' => 'USR-004', 'name' => 'Diana Flores', 'email' => 'diana.flores@example.com', 'role' => 'Cashier', 'status' => 'Inactive'],
                ['id' => 'USR-005', 'name' => 'Ethan Lim', 'email' => 'ethan.lim@example.com', 'role' => 'Inventory Clerk', 'status' => 'Active'],
            ], ['id'], ['name', 'email', 'role', 'status']);
        });
    }
}
