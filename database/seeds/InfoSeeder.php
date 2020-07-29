<?php

use Illuminate\Database\Seeder;

class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \Illuminate\Support\Facades\DB::table('Info')->insert([

            'userid'=>'1',
            'job'=>'Bilg. Müh.',
            'school'=>'Marmara Üni'

        ]);
    }
}
