<?php

use \Illuminate\Database\Seeder;
class GroupeTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run(){
        \DB::table('groups')->delete();
        \DB::table('groups')->insert([
           0 => [
               'id'         =>1,
               'hobby_id'   =>1,
               'groupe_name'=>'Tunis'
           ],

           1 => [
            'id'         =>2,
            'hobby_id'   =>2,
            'groupe_name'=>'Sousse'
        ],
            2 => [
                'id'         =>3,
                'hobby_id'   =>3,
                'groupe_name'=>'Kef'
            ],
            3 => [
                'id'         =>4,
                'hobby_id'   =>4,
                'groupe_name'=>'Nabeul'
            ],
        ]);
    }
}
