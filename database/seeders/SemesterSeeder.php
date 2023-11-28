<?php

namespace Database\Seeders;

use App\Models\Semester;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            1 => 'Segundo semestre',
            2 => 'Primer semestre',
        ];

        foreach ($courses as $id => $semester) {
            Semester::create([
                "id" => $id,
                "semester" => $semester,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
