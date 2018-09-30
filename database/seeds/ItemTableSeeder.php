<?php

use Illuminate\Database\Seeder;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('m_item')->delete();
        \DB::table('m_item')->insert([
            'itemNo' => 'item0001',
            'diagramNo' => 'z1000',
            'diagramName' => '図名',
            'updateUserId' => 'user',
            'updated_at' => new Datetime(),
            'created_at' => new Datetime()
            ]);
        \DB::table('m_item')->insert([
            'itemNo' => 'item0002',
            'diagramNo' => 'z1000',
            'diagramName' => '図名',
            'updateUserId' => 'user',
            'updated_at' => new Datetime(),
            'created_at' => new Datetime()
            ]);
    }
}
