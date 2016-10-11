<?php

use Illuminate\Database\Seeder;

class sallesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('salles')->insert([
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'password' => bcrypt('secret'),
            'nom'=>'toto',
            'adresse'=>'5 rue du loup pendu',
            'code_postal'=>'92350',
            'description'=>'lorem  ipsum',


        ]);
    }
}
