<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'store_name' => '盛岡駅前本店',
            'mail'       => 'moriokaekimae@kanenomai.co.jp',
            'password'   =>  Hash::make('moriokaekimae'),
        ];
        DB::table('stores')->insert($param);

        $param = [
            'store_name' => '盛岡大通店',
            'mail'       => 'moriokaoodoori@kanenomai.co.jp',
            'password'   => Hash::make('moriokaoodoori'),
        ];
        DB::table('stores')->insert($param);

        $param = [
            'store_name' => '矢巾駅前店',
            'mail'       => 'yahabaekimae@kanenomai.co.jp',
            'password'   => Hash::make('yahabaekimae'),
        ];
        DB::table('stores')->insert($param);
    }
}
