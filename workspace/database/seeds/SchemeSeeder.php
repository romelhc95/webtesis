<?php

use Illuminate\Database\Seeder;
use App\Scheme;
use Illuminate\Database\Eloquent\Model;

class SchemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schemes')->insert([
            'schema_description'=>"CUANTITATIVO",
        ]);
        DB::table('schemes')->insert([
            'schema_description'=>"CUALITATIVO",
        ]);
    }
}
