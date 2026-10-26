<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // Optional database snapshot for submission. The four pages use controller arrays.
    public function up(): void
    {
        Schema::create('pos_demo_customers', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('city');
            $table->string('status');
        });

        Schema::create('pos_demo_users', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('role');
            $table->string('status');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pos_demo_users');
        Schema::dropIfExists('pos_demo_customers');
    }
};
