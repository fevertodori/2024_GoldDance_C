<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SeatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'seat_number' => '1',
            'seat_type'   => 'テーブル',
            'group_id'    => '0',
            'store_id'    => '1',
        ];
        DB::table('seats')->insert($param);

        $param = [
            'seat_number' => '2',
            'seat_type'   => 'テーブル',
            'group_id'    => '0',
            'store_id'    => '1',
        ];
        DB::table('seats')->insert($param);

        $param = [
            'seat_number' => '3',
            'seat_type'   => 'テーブル',
            'group_id'    => '0',
            'store_id'    => '1',
        ];
        DB::table('seats')->insert($param);

        $param = [
            'seat_number' => '4',
            'seat_type'   => 'テーブル',
            'group_id'    => '0',
            'store_id'    => '1',
        ];
        DB::table('seats')->insert($param);

        $param = [
            'seat_number' => '5',
            'seat_type'   => 'テーブル',
            'group_id'    => '0',
            'store_id'    => '1',
        ];
        DB::table('seats')->insert($param);

        $param = [
            'seat_number' => '6',
            'seat_type'   => 'テーブル',
            'group_id'    => '0',
            'store_id'    => '1',
        ];
        DB::table('seats')->insert($param);

        $param = [
            'seat_number' => '7',
            'seat_type'   => 'テーブル',
            'group_id'    => '0',
            'store_id'    => '1',
        ];
        DB::table('seats')->insert($param);

        $param = [
            'seat_number' => '8',
            'seat_type'   => 'テーブル',
            'group_id'    => '0',
            'store_id'    => '1',
        ];
        DB::table('seats')->insert($param);

        $param = [
            'seat_number' => '9',
            'seat_type'   => 'テーブル',
            'group_id'    => '0',
            'store_id'    => '1',
        ];
        DB::table('seats')->insert($param);

        $param = [
            'seat_number' => '10',
            'seat_type'   => 'テーブル',
            'group_id'    => '0',
            'store_id'    => '1',
        ];
        DB::table('seats')->insert($param);
    }
}
