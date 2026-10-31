<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        // Eloquent reads the live table. Sample data is defined only in seeders.
        $users = User::query()->orderBy('full_name')->orderBy('id')->get();

        return view('users.index', ['users' => $users]);
    }
}
