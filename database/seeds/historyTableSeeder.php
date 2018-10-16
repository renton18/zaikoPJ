<?php

use Illuminate\Database\Seeder;

class historyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('t_stockhistory')->delete();
        \DB::table('t_stockhistory')->insert([
            'productionOrderId' => 'p000011',
            'itemNo' => 'item0001',
            'orderCategory' => '入庫',
            'amount' => '10',
            'updateUserId' => 'user',
            'updated_at' => new Datetime(),
            'created_at' => new Datetime()
            ]);
        \DB::table('t_stockhistory')->insert([
            'productionOrderId' => 'p000011w',
            'itemNo' => 'item0001',
            'orderCategory' => '入庫',
            'amount' => '10',
            'updateUserId' => 'user',
            'updated_at' => new Datetime(),
            'created_at' => new Datetime()
            ]);
        \DB::table('t_stockhistory')->insert([
            'productionOrderId' => 'p000011e',
            'itemNo' => 'item0001',
            'orderCategory' => '入庫',
            'amount' => '10',
            'updateUserId' => 'user',
            'updated_at' => new Datetime(),
            'created_at' => new Datetime()
            ]);
        \DB::table('t_stockhistory')->insert([
            'productionOrderId' => 'p000011a',
            'itemNo' => 'item0001',
            'orderCategory' => '入庫',
            'amount' => '10',
            'updateUserId' => 'user',
            'updated_at' => new Datetime(),
            'created_at' => new Datetime()
            ]);
    }
}
