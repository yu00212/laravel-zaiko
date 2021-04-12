<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>在庫追加</title>
</head>
<body>

    <p>全ての項目を入力後「登録」を押してください。</p>

    @if (count($errors) > 0)
    <p>入力に問題があります。<br>エラーが出ている項目を再入力してください。</p>
    @endif

    <form action="/list/addCheck" method="post">
    <table>
        @csrf

        @error('purchase_date')
            <tr><th>❗️</th>
            <td>{{$message}}</td></tr>
        @enderror
        <tr><th>購入日</th><td><input type="date" name="purchase_date" value="{{old('purchase_date')}}"></td></tr>

        @error('deadline')
            <tr><th>❗️</th>
            <td>{{$message}}</td></tr>
        @enderror
        <tr><th>期限</th><td><input type="date" name="deadline" value="{{old('deadline')}}"></td></tr>

        @error('name')
            <tr><th>❗️</th>
            <td>{{$message}}</td></tr>
        @enderror
        <tr><th>商品名</th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>

        @error('price')
            <tr><th>❗️</th>
            <td>{{$message}}</td></tr>
        @enderror
        <tr><th>値段</th><td><input type="text" name="price" value="{{old('price')}}"></td></tr>

        @error('number')
            <tr><th>❗️</th>
            <td>{{$message}}</td></tr>
        @enderror
        <tr><th>在庫数</th><td><input type="number" name="number" value="{{old('number')}}"></td></tr>
        <tr><th></th><td><input type="submit" value="登録"></td></tr>
    </table>
    </form>


</body>
</html>
