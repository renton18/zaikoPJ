<?php

use Illuminate\Database\Seeder;

class ZaikoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('zaikos')->delete();
        \DB::table('zaikos')->insert([
            'sk' => 'sk100001',
            'model' => 'ck2',
            'itemNo' => 'item0001',
            'number' => '10'
            ]);
        \DB::table('zaikos')->insert([
            'sk' => 'sk100002',
            'model' => 'ck2',
            'itemNo' => 'item0002',
            'number' => '30'
            ]);
        \DB::table('zaikos')->insert([
            'sk' => 'sk100003',
            'model' => 'ck2',
            'itemNo' => 'item0003',
            'number' => '20'
            ]);
        \DB::table('zaikos')->insert([
            'sk' => 'sk100004',
            'model' => 'ck2',
            'itemNo' => 'item0004',
            'number' => '15'
            ]);
    }
}
