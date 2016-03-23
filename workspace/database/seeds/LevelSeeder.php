<?php

use Illuminate\Database\Seeder;
use App\Level;
use Illuminate\Database\Eloquent\Model;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('levels')->insert([
            'description' => "Secretaria",
        ]);
        DB::table('levels')->insert([
            'description' => "Jefe De Area",
        ]);
        DB::table('levels')->insert([
            'description' => "Revisor",
        ]);
    }
}
