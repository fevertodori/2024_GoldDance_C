<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param  = [
            'product_name' => 'カルビ焼き',
            'price' => 1200,
            'image' => 'img/karubi.png',
            'memo'  => 'アレルギー:',
            'category_id' => '1',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => '牛タン焼き',
            'price' => 1000,
            'image' => 'img/gyutan.png',
            'memo'  => 'アレルギー:',
            'category_id' => '1',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => 'ホルモン焼き',
            'price' => 850,
            'image' => 'img/horumon.png',
            'memo'  => 'アレルギー:',
            'category_id' => '1',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => 'チーズタッカルビ',
            'price' => 1000,
            'image' => 'img/takkarubi.png',
            'memo'  => 'アレルギー:',
            'category_id' => '1',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => 'エビチリ',
            'price' => 900,
            'image' => 'img/ebichiri.png',
            'memo'  => 'アレルギー:エビ',
            'category_id' => '1',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => '青椒肉絲',
            'price' => 850,
            'image' => 'img/chinjaorosu.png',
            'memo'  => 'アレルギー:',
            'category_id' => '1',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => '酢豚',
            'price' => 800,
            'image' => 'img/subuta.png',
            'memo'  => 'アレルギー:',
            'category_id' => '1',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => '五目炒飯',
            'price' => 650,
            'image' => 'img/gomoku.png',
            'memo'  => 'アレルギー:',
            'category_id' => '1',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => 'チャーハン',
            'price' => 600,
            'image' => 'img/tyahan.png',
            'memo'  => 'アレルギー:',
            'category_id' => '1',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => 'もつ鍋',
            'price' => 1200,
            'image' => 'img/kimuchinabe.png',
            'memo'  => 'アレルギー:',
            'category_id' => '1',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => 'とんかつ',
            'price' => 1000,
            'image' => 'img/tonkatu.png',
            'memo'  => 'アレルギー:',
            'category_id' => '1',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => 'オムライス',
            'price' => 750,
            'image' => 'img/omurice.png',
            'memo'  => 'アレルギー:',
            'category_id' => '1',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => '焼きそば',
            'price' => 700,
            'image' => 'img/yakisoba.png',
            'memo'  => 'アレルギー:',
            'category_id' => '1',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => 'カレーうどん',
            'price' => 750,
            'image' => 'img/curryudon.png',
            'memo'  => 'アレルギー:',
            'category_id' => '1',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => 'とり天うどん',
            'price' => 700,
            'image' => 'img/toritenudon.png',
            'memo'  => 'アレルギー:',
            'category_id' => '1',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => '刺身盛り合わせ',
            'price' => 1500,
            'image' => 'img/sashimimoriawase.png',
            'memo'  => 'アレルギー:',
            'category_id' => '2',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => 'カレイの煮付け',
            'price' => 1000,
            'image' => 'img/kareinonituke.png',
            'memo'  => 'アレルギー:',
            'category_id' => '2',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => 'カキフライ',
            'price' => 900,
            'image' => 'img/kakihurai.png',
            'memo'  => 'アレルギー:',
            'category_id' => '2',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => 'タコの刺身',
            'price' => 900,
            'image' => 'img/takonosashimi.png',
            'memo'  => 'アレルギー:',
            'category_id' => '2',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => '日替わり焼き魚(サバ、サンマなど)',
            'price' => 850,
            'image' => 'img/higawariyakizakana.png',
            'memo'  => 'アレルギー:',
            'category_id' => '2',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => 'イカ焼き',
            'price' => 600,
            'image' => 'img/ikayaki.png',
            'memo'  => 'アレルギー:',
            'category_id' => '2',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => 'から揚げ',
            'price' => 700,
            'image' => 'img/karaage.png',
            'memo'  => 'アレルギー:',
            'category_id' => '3',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => 'イカの塩辛',
            'price' => 600,
            'image' => 'img/ikanosiokara.png',
            'memo'  => 'アレルギー:',
            'category_id' => '3',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => 'たこ焼き',
            'price' => 500,
            'image' => 'img/takoyaki.png',
            'memo'  => 'アレルギー:',
            'category_id' => '3',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => '明太子チーズ焼き',
            'price' => 800,
            'image' => 'img/mentaikocheese.png',
            'memo'  => 'アレルギー:',
            'category_id' => '3',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => 'カニクリームコロッケ',
            'price' => 600,
            'image' => 'img/kanikurimukorokke.png',
            'memo'  => 'アレルギー:',
            'category_id' => '3',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => '茶碗蒸し',
            'price' => 500,
            'image' => 'img/tyawanmushi.png',
            'memo'  => 'アレルギー:',
            'category_id' => '3',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => 'ソーセージ盛り合わせ',
            'price' => 850,
            'image' => 'img/sosejimoriawase.png',
            'memo'  => 'アレルギー:',
            'category_id' => '3',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => 'さつま揚げ',
            'price' => 400,
            'image' => 'img/satumaage.png',
            'memo'  => 'アレルギー:',
            'category_id' => '3',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => 'シーフードサラダ',
            'price' => 850,
            'image' => 'img/seafoodsalad.png',
            'memo'  => 'アレルギー:',
            'category_id' => '3',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => 'シーザーサラダ',
            'price' => 600,
            'image' => 'img/caesarsalad.png',
            'memo'  => 'アレルギー:',
            'category_id' => '3',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => 'おつまみキャベツ',
            'price' => 300,
            'image' => 'img/otumamicabbage.png',
            'memo'  => 'アレルギー:',
            'category_id' => '3',
            'drink_free_flag' => '1',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => 'たこわさ',
            'price' => 350,
            'image' => 'img/takowasa.png',
            'memo'  => 'アレルギー:',
            'category_id' => '3',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => '鶏皮ポン酢',
            'price' => 400,
            'image' => 'img/torikawaponzu.png',
            'memo'  => 'アレルギー:',
            'category_id' => '3',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => '樽生ビール(大)',
            'price' => 750,
            'image' => 'img/tarubear_large.png',
            'memo'  => 'アレルギー:',
            'category_id' => '4',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => '樽生ビール(中)',
            'price' => 520,
            'image' => 'img/tarubear_medium.png',
            'memo'  => 'アレルギー:',
            'category_id' => '4',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => '樽生ビール(小)',
            'price' => 400,
            'image' => 'img/tarubear_small.png',
            'memo'  => 'アレルギー:',
            'category_id' => '4',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => '黒生(瓶)',
            'price' => 430,
            'image' => 'img/kuronama.png',
            'memo'  => 'アレルギー:',
            'category_id' => '4',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => 'プレミアムビール',
            'price' => 520,
            'image' => 'img/premium_bear.png',
            'memo'  => 'アレルギー:',
            'category_id' => '4',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => 'ノンアルコールビール',
            'price' => 440,
            'image' => 'img/nonalcholbear.png',
            'memo'  => 'アレルギー:',
            'category_id' => '4',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => '黒霧島(グラス)',
            'price' => 400,
            'image' => 'img/kurokirishima_glass,.png',
            'memo'  => 'アレルギー:',
            'category_id' => '5',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => '黒霧島(ボトル)',
            'price' => 2200,
            'image' => 'img/kurokirishima_bottle.png',
            'memo'  => 'アレルギー:',
            'category_id' => '5',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => '二階堂(グラス)',
            'price' => 400,
            'image' => 'img/nikaidou_gurasu.png',
            'memo'  => 'アレルギー:',
            'category_id' => '5',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => '二階堂(ボトル)',
            'price' => 2200,
            'image' => 'img/kurokirishima_bottle.png',
            'memo'  => 'アレルギー:',
            'category_id' => '5',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => '角(シングル)(グラス)',
            'price' => 300,
            'image' => 'img/kaku_single_glass.png',
            'memo'  => 'アレルギー:',
            'category_id' => '6',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => '角(シングル)(ボトル)',
            'price' => 3500,
            'image' => 'img/kaku_single_bottle.png',
            'memo'  => 'アレルギー:',
            'category_id' => '6',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => '角ハイボール(グラス)',
            'price' => 800,
            'image' => 'img/kakuhighball_glass.png',
            'memo'  => 'アレルギー:',
            'category_id' => '6',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => '南部美人(一合)',
            'price' => 500,
            'image' => 'img/nanbubijin.png',
            'memo'  => 'アレルギー:',
            'category_id' => '7',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => '赤武(一合)',
            'price' => 500,
            'image' => 'img/akabu.png',
            'memo'  => 'アレルギー:',
            'category_id' => '7',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => 'タクシードライバー(一合)',
            'price' => 500,
            'image' => 'img/taxidriver.png',
            'memo'  => 'アレルギー:',
            'category_id' => '7',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => '梅酒',
            'price' => 400,
            'image' => 'img/umesyu.png',
            'memo'  => 'アレルギー:',
            'category_id' => '8',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => 'あんず酒',
            'price' => 400,
            'image' => 'img/anzusyu.png',
            'memo'  => 'アレルギー:',
            'category_id' => '8',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => 'チューハイ',
            'price' => 300,
            'image' => 'img/tyuhai.png',
            'memo'  => 'アレルギー:',
            'category_id' => '9',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => 'ウーロンハイ',
            'price' => 320,
            'image' => 'img/uronhai.png',
            'memo'  => 'アレルギー:',
            'category_id' => '9',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => '緑茶ハイ',
            'price' => 320,
            'image' => 'img/ryokutyahai.png',
            'memo'  => 'アレルギー:',
            'category_id' => '9',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => 'レモンサワー',
            'price' => 350,
            'image' => 'img/lemonsour.png',
            'memo'  => 'アレルギー:',
            'category_id' => '9',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => 'カルピスサワー',
            'price' => 350,
            'image' => 'img/karupisusour.png',
            'memo'  => 'アレルギー:',
            'category_id' => '9',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => '梅酒サワー',
            'price' => 350,
            'image' => 'img/umesyusour.png',
            'memo'  => 'アレルギー:',
            'category_id' => '9',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => 'カシスソーダ',
            'price' => 400,
            'image' => 'img/cassissoda.png',
            'memo'  => 'アレルギー:',
            'category_id' => '9',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => 'カシスオレンジ',
            'price' => 450,
            'image' => 'img/cassisorange.png',
            'memo'  => 'アレルギー:',
            'category_id' => '9',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => 'カシスウーロン',
            'price' => 450,
            'image' => 'img/cassisuron.png',
            'memo'  => 'アレルギー:',
            'category_id' => '9',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => 'カルーアミルク',
            'price' => 450,
            'image' => 'img/kahluamilk.png',
            'memo'  => 'アレルギー:',
            'category_id' => '9',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => '赤(300ml)',
            'price' => 700,
            'image' => 'img/winered.png',
            'memo'  => 'アレルギー:',
            'category_id' => '10',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => '白(300ml)',
            'price' => 700,
            'image' => 'img/winewhite.png',
            'memo'  => 'アレルギー:',
            'category_id' => '10',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => 'コーラ',
            'price' => 250,
            'image' => 'img/cola.png',
            'memo'  => 'アレルギー:',
            'category_id' => '11',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => 'オレンジジュース',
            'price' => 250,
            'image' => 'img/orangejuice.png',
            'memo'  => 'アレルギー:',
            'category_id' => '11',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => 'カルピスソーダ',
            'price' => 250,
            'image' => 'img/karupisusoda.png',
            'memo'  => 'アレルギー:',
            'category_id' => '11',
        ];
        DB::table('products')->insert($param); 
        
        $param  = [
            'product_name' => 'カルピスウォーター',
            'price' => 250,
            'image' => 'img/karupisuwater.png',
            'memo'  => 'アレルギー:',
            'category_id' => '11',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => 'ウーロン茶',
            'price' => 250,
            'image' => 'img/urontea.png',
            'memo'  => 'アレルギー:',
            'category_id' => '11',
        ];
        DB::table('products')->insert($param);

        $param  = [
            'product_name' => 'ジャスミンティー',
            'price' => 250,
            'image' => 'img/jasmintea.png',
            'memo'  => 'アレルギー:',
            'category_id' => '11',
        ];
        DB::table('products')->insert($param);
    }
}
