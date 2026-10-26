<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        // Temporary data source for TFA5. These records are not read from a database.
        $users = [
            ['id' => 'USR-001', 'name' => 'Alex Rivera', 'email' => 'alex.rivera@example.com', 'role' => 'Administrator', 'status' => 'Active'],
            ['id' => 'USR-002', 'name' => 'Bea Torres', 'email' => 'bea.torres@example.com', 'role' => 'Manager', 'status' => 'Active'],
            ['id' => 'USR-003', 'name' => 'Carlo Ramos', 'email' => 'carlo.ramos@example.com', 'role' => 'Cashier', 'status' => 'Active'],
            ['id' => 'USR-004', 'name' => 'Diana Flores', 'email' => 'diana.flores@example.com', 'role' => 'Cashier', 'status' => 'Inactive'],
            ['id' => 'USR-005', 'name' => 'Ethan Lim', 'email' => 'ethan.lim@example.com', 'role' => 'Inventory Clerk', 'status' => 'Active'],
        ];

        return view('users.index', ['users' => $users]);
    }
}
