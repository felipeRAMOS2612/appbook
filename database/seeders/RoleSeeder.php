<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Permission;
class RoleSeeder extends Seeder
{
    /*
     ADMIN => PUEDE VER TODO Y CREAR TODO
     STUDENT => PUEDE VER SUS NOTAS MAS NO CREAR NADA(EXCEPTO CORREO)
     TEACHER => PUEDE VER TODOS LOS ESTUDIANTES, CREAR Y VER NOTAS, CREAR Y VER ANOTACIONES Y DEMÁS
     */
    public function run(): void
    {
        $admin = Role::create(["name"=> 'admin']);
        $student = Role::create(["name"=> 'student']);
        $teacher = Role::create(["name"=> 'teacher']);

        Permission::create(['name' => 'courses.index'])->syncRoles([$teacher, $student, $admin]);
        Permission::create(['name' => 'course-student.index'])->syncRoles([$admin, $teacher]);
        Permission::create(['name' => 'course-student.create'])->syncRoles([$admin, $teacher]);
        Permission::create(['name' => 'course-student.store'])->syncRoles([$admin, $teacher]);
        Permission::create(['name' => 'course-student.destroy'])->syncRoles([$admin, $teacher]);
        Permission::create(['name' => 'student.destroy'])->syncRoles([$admin]);
        Permission::create(['name' => 'student.create'])->syncRoles([$admin]);
        Permission::create(['name' => 'student.update'])->syncRoles([$admin]);
        Permission::create(['name' => 'student.edit'])->syncRoles([$admin]);
        Permission::create(['name' => 'student.index'])->syncRoles([$admin, $teacher, $student]);
        Permission::create(['name' => 'student.store'])->syncRoles([$admin]);
        Permission::create(['name' => 'teacher.destroy'])->syncRoles([$admin]);
        Permission::create(['name' => 'teacher.create'])->syncRoles([$admin]);
        Permission::create(['name' => 'teacher.update'])->syncRoles([$admin]);
        Permission::create(['name' => 'teacher.edit'])->syncRoles([$admin]);
        Permission::create(['name' => 'teacher.index'])->syncRoles([$admin]);
        Permission::create(['name' => 'teacher.store'])->syncRoles([$admin]);
        Permission::create(['name' => 'subject.destroy'])->syncRoles([$admin]);
        Permission::create(['name' => 'subject.create'])->syncRoles([$admin]);
        Permission::create(['name' => 'subject.update'])->syncRoles([$admin]);
        Permission::create(['name' => 'subject.edit'])->syncRoles([$admin]);
        Permission::create(['name' => 'subject.index'])->syncRoles([$admin, $teacher, $student]);
        Permission::create(['name' => 'subject.store'])->syncRoles([$admin]);
        Permission::create(['name' => 'grade.destroy'])->syncRoles([$teacher]);
        Permission::create(['name' => 'grade.create'])->syncRoles([$teacher]);
        Permission::create(['name' => 'grade.update'])->syncRoles([$teacher]);
        Permission::create(['name' => 'grade.edit'])->syncRoles([$teacher]);
        Permission::create(['name' => 'grade.index'])->syncRoles([$admin, $teacher, $student]);
        Permission::create(['name' => 'grade.store'])->syncRoles([$teacher]);
        Permission::create(['name' => 'grade.show'])->syncRoles([$admin, $teacher, $student]);
        
    }
}
