<?php

use Illuminate\Database\Seeder;
use App\Faculty;
use Illuminate\Database\Eloquent\Model;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faculties')->insert([
           'description' => "ARQUITECTURA",
        ]);
        DB::table('faculties')->insert([
           'description' => "CIENCIAS DE LA COMUNICACION",
        ]);
        DB::table('faculties')->insert([
           'description' => "CIENCIAS EMPRESARIALES",
        ]);
        DB::table('faculties')->insert([
           'description' => "CIENCIAS MÉDICAS",
        ]);
        DB::table('faculties')->insert([
           'description' => "DERECHO",
        ]);
        DB::table('faculties')->insert([
           'description' => "EDUCACIÓN E IDIOMAS",
        ]);
        DB::table('faculties')->insert([
           'description' => "HUMANIDADES",
        ]);
        DB::table('faculties')->insert([
           'description' => "INGENIERIA",
        ]);
    }
}
