<?php

use Illuminate\Database\Seeder;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'salle_id' => '1',
            'user_id' => '1',
            'note'=>'3',
            'commentaire'=>'lorem ',

        ]);
    }
}
