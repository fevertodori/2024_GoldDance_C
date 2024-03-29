<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/All.css">

    <title>Document</title>
</head>
<body>
   


    <div class="main-icon">
        <img src="../img/金の舞ロゴ.png">
        </div>
        
    <div class="header">
        <li>
            <a href="">
                <img src="../img/普通の家のアイコン.png" alt="home-icon"><br>
                <h6>ホーム</h6>
            </a>
        </li>
        <li>
            <a href="">
                <img src="../img/フォークとスプーンのアイコン.png" alt="cooking-icon"><br>
                <h6>料理</h6>
            </a>
        </li>
        <li>
            <a href="">
                <img src="../img/メモ帳のアイコン.png" alt="list-icon"><br>
                <h6>注文履歴</h6>
            </a>
        </li>
        <li>
            <a href="">
                <img src="../img/人物のアイコン.png" alt="human-icon"><br>
                <h6>店員呼出</h6>
            </a>
        </li>
        <li>
            <a href="../利用者/お会計.html">
                <img src="../img/円マークのアイコン.png" alt="money-icon"><br>
                <h6>お会計</h6>
            </a>
        </li>
    </div>

    <div class="btn">
        <a href="">一品料理1</a>
        <a href="">一品料理2</a>
        <a href="">魚介</a>
        <a href="">おつまみ1</a>
        <a href="">おつまみ2</a>
        <a href="">ビール</a>
        <a href="">焼酎</a>
        <a href="">ウィスキー</a>
        <a href="">日本酒</a>
        <a href="">果実酒</a>
        <a href="">サワー・カクテル1</a>
        <a href="">サワー・カクテル2</a>
        <a href="">ワイン</a>
        <a href="">ドリンク</a>
        <a href="">コース</a>
    </div>

    </div>

    <div class="menu">
    <div class="menu1">
        <a href="">
            <div class="menu1-1">
                <img src="../img/金の舞背景.jpg" alt="メニュー画像1">
                <h3>金の舞金の舞</h3>
                <p>金の舞金の舞</p>
            </div>
        </a>
    </div>
    <div class="menu2">
        <a href="">
            <div class="menu1-2">
                <img src="../img/金の舞背景.jpg" alt="メニュー画像2">
                <h3>名前</h3>
                <p>値段</p>
            </div>
        </a>
    </div>
    <div class="menu3">
        <a href="">
            <div class="menu1-3">
                <img src="../img/金の舞背景.jpg" alt="メニュー画像3">
                <h3>名前</h3>
                <p>値段</p>
            </div>
        </a>
    </div>
    <div class="menu4">
        <a href="">
            <div class="menu1-4">
                <img src="../img/金の舞背景.jpg" alt="メニュー画像4">
                <h3>名前</h3>
                <p>値段</p>
            </div>
        </a>
    </div>
    <div class="menu5">
        <a href="">
            <div class="menu1-5">
                <img src="../img/金の舞背景.jpg" alt="メニュー画像5">
                <h3>名前</h3>
                <p>値段</p>
            </div>
        </a>
    </div>
    <div class="menu6">
        <a href="">
            <div class="menu1-6">
                <img src="../img/金の舞背景.jpg" alt="メニュー画像6">
                <h3>名前</h3>
                <p>値段</p>
            </div>
        </a>
    </div>
    <div class="menu7">
        <a href="">
            <div class="menu1-7">
                <img src="../img/金の舞背景.jpg" alt="メニュー画像7">
                <h3>名前</h3>
                <p>値段</p>
            </div>
        </a>
    </div>
    <div class="menu8">
        <a href="">
            <div class="menu1-8">
                <img src="../img/金の舞背景.jpg" alt="メニュー画像8">
                <h3>名前</h3>
                <p>値段</p>
            </div>
        </a>
    </div>

    <table>
        @foreach($items as $item)
        <tr>
            <td><a href="detail">{{ $item -> product_name}}</a></td>
            <td>{{ $item -> price}}</td>
            <td>{{ ceil($item -> price * 1.08)}}</td>
            <td><img src="{{ $item -> image}}" alt="商品"></td>
        </tr>
        @endforeach
    </table>
</body>
</html>