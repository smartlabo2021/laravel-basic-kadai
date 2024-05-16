<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel課題</title>
</head>

<body>
    <table>
        <tr>
            <th>title</th>
            <th>content</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{$product->title}}</td>
            <td>{{$product->content}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>