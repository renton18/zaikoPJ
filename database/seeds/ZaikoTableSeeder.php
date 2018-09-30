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
        \DB::table('t_stock')->delete();
        \DB::table('t_stock')->insert([
            'productionOrderId' => '100001',
            'itemNo' => 'item0001',
            'currentAmount' => '10',
            'updateUserId' => 'user'
            ]);
        \DB::table('t_stock')->insert([
            'productionOrderId' => '100002',
            'itemNo' => 'item0002',
            'currentAmount' => '10',
            'updateUserId' => 'user'
            ]);
        \DB::table('t_stock')->insert([
            'productionOrderId' => '100003',
            'itemNo' => 'item0003',
            'currentAmount' => '10',
            'updateUserId' => 'user'
            ]);
        \DB::table('t_stock')->insert([
            'productionOrderId' => '100004',
            'itemNo' => 'item0004',
            'currentAmount' => '10',
            'updateUserId' => 'user'
            ]);
    }
}
