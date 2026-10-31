<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            ['username' => 'alex.rivera', 'full_name' => 'Alex Rivera'],
            ['username' => 'bea.torres', 'full_name' => 'Bea Torres'],
            ['username' => 'carlo.ramos', 'full_name' => 'Carlo Ramos'],
            ['username' => 'diana.flores', 'full_name' => 'Diana Flores'],
            ['username' => 'ethan.lim', 'full_name' => 'Ethan Lim'],
        ];

        foreach ($users as $record) {
            $user = User::firstOrNew(['username' => $record['username']]);
            $user->full_name = $record['full_name'];
            $user->name = $record['full_name'];

            if (! $user->exists) {
                // Satisfy the default Laravel users columns without shared login credentials.
                $user->email = $record['username'].'@example.com';
                $user->password = Str::random(64);
            }

            // The model hashes new passwords; existing passwords are not reset.
            $user->save();
        }
    }
}
