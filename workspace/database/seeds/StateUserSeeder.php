<?php

use Illuminate\Database\Seeder;
use App\StateUser;
use Illuminate\Database\Eloquent\Model;

class StateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('state-users')->insert([
            'description'=>"activo"
        ]);
        DB::table('state-users')->insert([
            'description'=>"inactivo"
        ]);
    }
}
