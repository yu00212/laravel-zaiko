<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>在庫一覧</title>
</head>
<body>

    <div id = "menu-list">
        <ul>
            <li><a href = "../user/user_list.php">アカウント編集</a></li>
            <li><a href = "../user_login/logout_check.php">ログアウト</a></li>
        </ul>
    </div>

    <form action="/add">
        <input type = "submit" name="add" value = "追加">
        </form>
    <form method = "post" action = "stock_branch.php">
    @csrf
        <a href="/add">追加</a>
        <input type = "submit" name = "disp" value = "参照">
        <input type = "submit" name = "edit" value = "修正">
        <input type = "submit" name="delete" value = "削除">
        <input type = "submit" name="add" value = "追加">
        <input type = "text" name = "search_name" class = "search">
        <input type  ="submit" value = "検索">
        <br>

        <table class = "sorttbl" id = "myTable" border = "2">
            <tr>
                <th></th>
                <th>購入日</th>
                <th>商品</th>
                <th>値段</th>
                <th>数量</th>
                <th onclick = "w3.sortHTML('#myTable','.item', 'td:nth-child(6)')">消費期限&nbsp;<i class = "fa fa-sort"></i></th>
            </tr>

            <!-- アットforeach ($stock as $s) -->
            <tr class = "item">
                <td><label><input type = "radio" name = "stock_id" value = "{$s[0]}"></label></td>
                <td>{$s[1]}</td>
                <td>{$s[3]}</td>
                <td>¥{$s[4]}</td>
                <td>{$s[5]}</td>
                <td>{$s[2]}</td>
            </tr>
            <!-- アットendforeach -->
        </table>

        <input type = "submit" name = "disp" value = "参照">
        <input type = "submit" name = "edit" value = "修正">
        <input type = "submit" name = "delete" value = "削除">
        <input type = "submit" name = "add" value = "追加">
    </form>

</body>
</html>
