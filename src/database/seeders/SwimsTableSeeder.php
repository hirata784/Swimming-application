<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SwimsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'テスト',
            'age' => '43',
            'gender' => '男性',
            'tel' => '0451111515',
            'week1' => '火曜日',
            'week2' => '木曜日',
            'week3' => '',
            'course' => '初級コース',
            'comment' => 'メッセージ'
        ];
        DB::table('swims')->insert($param);
    }
}
