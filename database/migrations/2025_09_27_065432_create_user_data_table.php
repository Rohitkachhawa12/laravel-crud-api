<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_data', function (Blueprint $table) {
            $table->id('user_data_id')->comment('Primary key: Unique ID of user');
            $table->string('name')->nullable()->comment('Full name of the user');
            $table->string('email')->unique()->comment('Email address of the user (required & unique)');
            $table->string('number')->nullable()->comment('Mobile number of the user');
            $table->string('gender')->nullable()->comment('Gender of the user');
            $table->string('state')->nullable()->comment('State of residence');
            $table->string('city')->nullable()->comment('City of residence');
            $table->string('password')->comment('Password of the user (required)');
            $table->string('created_by')->nullable()->comment('Record created by user/admin');

            $table->timestamp('update_date')->nullable()->comment('Last update timestamp');
            $table->timestamp('create_date')->useCurrent()->comment('Record creation timestamp');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_data');
    }
};
