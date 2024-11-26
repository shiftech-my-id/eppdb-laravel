<?php

namespace Database\Seeders;

use App\Models\Staff;
use App\Models\User;
use Database\Factories\StaffFactory;
use Database\Factories\StudentFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $password = Hash::make('12345');
        StaffFactory::$password = $password;
        StudentFactory::$password = $password;

        $this->call([
            StaffSeeder::class,
            StudentSeeder::class,
        ]);
    }
}
