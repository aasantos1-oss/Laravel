<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

/**
 * Compatibility entry point for the seeder command in the earlier TFA5 package.
 * TFA6 writes to customers and users, not the old pos_demo_* snapshot tables.
 */
class PosDemoSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(PosSeeder::class);
    }
}
