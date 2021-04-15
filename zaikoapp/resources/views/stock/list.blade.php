@extends('layouts.layout')

@section('title', '在庫一覧')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <a href="/list/add" class="btn btn-primary" style="margin:20px;">在庫追加</a>
        </div>
    </div>

    <table class = "sorttbl" id = "myTable" border = "2">
        <tr>
            <th>購入日</th>
            <th>商品</th>
            <th>値段</th>
            <th>数量</th>
            <th onclick = "w3.sortHTML('#myTable','.item', 'td:nth-child(6)')">消費期限&nbsp;<i class = "fa fa-sort"></i></th>
        </tr>

        @foreach ($stocks as $stock)
            <tr class = "item">
                <td>{{$stock->purchase_date}}</td>
                <td>{{$stock->name}}</td>
                <td>¥{{$stock->price}}</td>
                <td>{{$stock->number}}</td>
                <td>{{$stock->deadline}}</td>

                <td><a href="/list/show/{{$stock->id}}" class="btn btn-primary btn-sm">詳細</a></td>
                <td><a href="/list/edit/{{$stock->id}}" class="btn btn-primary btn-sm">編集</a></td>
                <td>
                    <form method="post" action="/list/destroy/{{$stock->id}}">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="submit" value="削除" class="btn btn-danger btn-sm btn-destroy">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $stocks->links() }}
@endsection




