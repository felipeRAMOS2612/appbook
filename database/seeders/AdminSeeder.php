<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => "Admin",
            'last_name' => "Admin",
            'rut' => "111111-1",
            'email' => "Admin@Admin.com",
            'email_verified_at' => now(),
            'phone' => "+5612345678",
            'address' => "ABC12345",
            'password' => Hash::make('admin123'),
            'remember_token' => Str::random(10),
        ])->assignRole('admin');
    }
}
