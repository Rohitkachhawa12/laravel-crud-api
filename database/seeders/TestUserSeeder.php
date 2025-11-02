<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserData;
use Illuminate\Support\Facades\Hash;

class TestUserSeeder extends Seeder
{
    /**
     * Run the database seeder.
     */
    public function run(): void
    {
        // Create test user
        UserData::create([
            'full_name' => 'Ankit Test',
            'email' => 'ankit@example.com',
            'password' => Hash::make('123456'),
            'number' => '9876543210',
            'gender' => 'Male',
            'state' => 'Delhi',
            'city' => 'New Delhi'
        ]);

        $this->command->info('Test user created successfully!');
    }
}
