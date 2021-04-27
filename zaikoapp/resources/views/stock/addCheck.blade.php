<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>在庫追加確認</title>
</head>
<body>

    <p>下記の内容で間違い無いですか？</p>

    @if (count($errors) > 0)
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <table border=2>
        <tr><th>店名</th><td>{{$s['shop']}}</td></tr>
        <tr><th>購入日</th><td>{{$s['purchase_date']}}</td></tr>
        <tr><th>期限</th><td> {{$s['deadline']}}</td></tr>
        <tr><th>商品名</th><td>{{$s['name']}}</td></tr>
        <tr><th>値段</th><td>{{$s['price']}}</td></tr>
        <tr><th>在庫数</th><td>{{$s['number']}}</td></tr>
    </table>

    <form action="/list/addDone">
        @csrf
        <input type="hidden" name="shop" value="{{$s['shop']}}">
        <input type="hidden" name="purchase_date" value="{{$s['purchase_date']}}">
        <input type="hidden" name="deadline" value="{{$s['deadline']}}">
        <input type="hidden" name="name" value="{{$s['name']}}">
        <input type="hidden" name="price" value="{{$s['price']}}">
        <input type="hidden" name="number" value="{{$s['number']}}">
        <input type="submit" value="登録">
    </form>


</body>
</html>
