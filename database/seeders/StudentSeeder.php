<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::factory()->create([
            'name' => 'Siswa 1',
            'username' => 'siswa1',
            'password' => Hash::make('12345'),
        ]);
        Student::factory(1000)->create();
    }
}
