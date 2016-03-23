<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(LevelSeeder::class);
        $this->call(SchemeSeeder::class);
        $this->call(StateUserSeeder::class);
        $this->call(StateDoc1Seeder::class);
        $this->call(FacultySeeder::class);
        $this->call(CareerSeeder::class);
        $this->call(AreaSeeder::class);
        $this->call(LineSeeder::class);
    }
}
