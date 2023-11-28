<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            1 => '7° Básico A',
            2 => '7° Basico B',
            3 => '8° Básico A ',
            4 => '8° Básico B',
            5 => '1° Medio A',
            6 => '1° Medio B',
            7 => '2° Medio A',
            8 => '2° Medio B',
            9 => '3° Medio A',
            10 => '3° Medio B',
            11 => '4° Medio A',
            12 => '4° Medio B',
        ];

        foreach ($courses as $id => $course) {
        Course::create([
            "id" => $id,
            "course" => $course,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        }
    }
}
