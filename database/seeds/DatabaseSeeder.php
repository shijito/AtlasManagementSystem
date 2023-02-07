<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //SubjectsTableSeederが反映されるように記載が必要
        //call(反映させたいTableSeeder名::class)
        $this->call(SubjectsTableSeeder::class);



    }
}