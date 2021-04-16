<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>在庫検索</title>
</head>
<body>

    <div class="row">
        <div class="col-sm-12">
            <form method="post" action="/list/search" class="form-inline" style="margin:20px;">
            @csrf
                <div class="form-group">
                    <label>検索</label>
                    <input type="text" name="search" class="form-control" value="{{$keyword}}">
                </div>
                <input type="submit" value="検索" class="btn btn-info">
            </form>
        </div>
    </div>

    @if (isset($err))
        <p>{{$err}}</p>
    @endif

    @if ($count === 0 && !isset($err))
        <p>該当商品がありません。</p>
    @elseif ($count > 0)
        <p>{{$count}}件の該当商品がありました。</p>
        <table border="2">
            <tr>
                <th>購入日</th>
                <th>商品</th>
                <th>値段</th>
                <th>数量</th>
                <th>消費期限</th>
            </tr>

            @foreach ($stocks as $stock)
                <tr class = "item">
                    <td>{{$stock->purchase_date}}</>
                    <td>{{$stock->name}}</td>
                    <td>¥{{$stock->price}}</td>
                    <td>{{$stock->number}}</td>
                    <td>{{$stock->deadline}}</td>
                </tr>
            @endforeach
        </table>
    @endif

    <div class="row">
        <div class="col-sm-12">
            <a href="/list" class="btn btn-primary" style="margin:20px;">一覧に戻る</a>
        </div>
    </div>

</body>
</html>
