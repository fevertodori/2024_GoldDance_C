<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Document</title>
</head>
<body>
    <div class="main-icon">
        <img src="../img/金の舞ロゴ.png">
        </div>

        <div class="main">
        <div class="content">
            <h1>ログイン画面</h1>
        <form action="/login" method="post">
        @csrf
        <p>Eメール</p>
        <input type="email" name="email" required>
        <p>パスワード</p>
        <input type="password" name="password" required><br>
        <input type="submit" value="ログイン">

        </form>

        </div>
        </div>

</body>
</html>