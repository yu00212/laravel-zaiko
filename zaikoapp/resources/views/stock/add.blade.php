<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>在庫追加</title>
</head>
<body>

    <p>全ての項目を入力後「登録」を押してください。</p>

    <form action="/list/add" method="post">
    <table>
        @csrf
        <tr><th>購入日: </th><td><input type="date" name="purchase_date"></td></tr>
        <tr><th>期限: </th><td><input type="date" name="deadline"></td></tr>
        <tr><th>商品名: </th><td><input type="text" name="name"></td></tr>
        <tr><th>値段: </th><td><input type="text" name="price"></td></tr>
        <tr><th>在庫数: </th><td><input type="number" name="number"></td></tr>
        <tr><th></th><td><input type="submit" value="登録"></td></tr>
    </table>
    </form>


</body>
</html>
