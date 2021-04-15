<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>在庫詳細</title>
</head>
<body>

    @if (isset($err) == true)
        <p>{{$err}}</p>
    @endif

    <table border=2>
        <tr><th>購入日</th><td>{{$stock['purchase_date']}}</td></tr>
        <tr><th>期限</th><td> {{$stock['deadline']}}</td></tr>
        <tr><th>商品名</th><td>{{$stock['name']}}</td></tr>
        <tr><th>値段</th><td>{{$stock['price']}}</td></tr>
        <tr><th>在庫数</th><td>{{$stock['number']}}</td></tr>
    </table>

    <div class="row">
        <div class="col-sm-12">
            <a href="/list" class="btn btn-primary" style="margin:20px;">一覧に戻る</a>
        </div>
    </div>


</body>
</html>
