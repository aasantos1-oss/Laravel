<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\View\View;

class CustomerController extends Controller
{
    public function index(): View
    {
        // Eloquent reads the live table. Sample data is defined only in seeders.
        $customers = Customer::query()->orderBy('full_name')->orderBy('id')->get();

        return view('customers.index', ['customers' => $customers]);
    }
}
