<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ログイン画面</h1>

    <form action="/login" method="post">
        @csrf
        Eメール <br>
        <input type="email" name="email"> <br>
        パスワード <br>
        <input type="password" name="password"> <br>
        <button type="submit"  class="submit">ログイン</button>
    </form>
    

    <script>
        let btn = document.querySelector('button');

        btn.addEventListener('mouseup',() => {
            let res = prompt('座席の番号を入力してください')
        })
    </script>
</body>
</html>