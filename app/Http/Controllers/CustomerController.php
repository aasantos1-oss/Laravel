<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class CustomerController extends Controller
{
    public function index(): View
    {
        // Temporary data source for TFA5. These records are not read from a database.
        $customers = [
            ['id' => 'CUS-001', 'name' => 'Isabel Reyes', 'email' => 'isabel.reyes@example.com', 'phone' => '0917 000 0001', 'city' => 'Paranaque', 'status' => 'Active'],
            ['id' => 'CUS-002', 'name' => 'Miguel Santos', 'email' => 'miguel.santos@example.com', 'phone' => '0917 000 0002', 'city' => 'Muntinlupa', 'status' => 'Active'],
            ['id' => 'CUS-003', 'name' => 'Sofia Cruz', 'email' => 'sofia.cruz@example.com', 'phone' => '0917 000 0003', 'city' => 'Las Pinas', 'status' => 'Inactive'],
            ['id' => 'CUS-004', 'name' => 'Gabriel Mendoza', 'email' => 'gabriel.mendoza@example.com', 'phone' => '0917 000 0004', 'city' => 'Taguig', 'status' => 'Active'],
            ['id' => 'CUS-005', 'name' => 'Camille Garcia', 'email' => 'camille.garcia@example.com', 'phone' => '0917 000 0005', 'city' => 'Makati', 'status' => 'Active'],
        ];

        return view('customers.index', ['customers' => $customers]);
    }
}
