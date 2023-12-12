<?php

namespace Database\Seeders;

use App\Models\Day;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Day::create([
            "id" => 1,
            "day" => "Lunes",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Day::create([
            "id" => 2,
            "day" => "Martes",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Day::create([
            "id" => 3,
            "day" => "Miercoles",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Day::create([
            "id" => 4,
            "day" => "Jueves",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Day::create([
            "id" => 5,
            "day" => "Viernes",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Day::create([
            "id" => 6,
            "day" => "Sabado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Day::create([
            "id" => 7,
            "day" => "Domingo",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
