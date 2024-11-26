<?php

namespace Database\Seeders;

use App\Models\Staff;
use Database\Factories\StaffFactory;
use Database\Factories\StudentFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Staff::factory()->create([
            'name' => 'Admin',
            'username' => 'admin',
            'active' => true,
            'password' => Hash::make('12345'),
        ]);
        Staff::factory(10)->create();
    }
}
