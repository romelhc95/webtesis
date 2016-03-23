<?php

use Illuminate\Database\Seeder;
use App\StateDoc1;
use Illuminate\Database\Illuminate\Model;

class StateDoc1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('state-doc1s')->insert([
            'description'=>'Pendiente de Asignación',
        ]);
    }
}
