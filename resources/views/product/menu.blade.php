<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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