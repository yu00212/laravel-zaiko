@extends('layouts.layout')

@section('content')

    <p>下記の在庫を削除しますか？</p>

    <table border=2>
        <tr><th>購入日</th><td>{{$stock['purchase_date']}}</td></tr>
        <tr><th>期限</th><td> {{$stock['deadline']}}</td></tr>
        <tr><th>商品名</th><td>{{$stock['name']}}</td></tr>
        <tr><th>値段</th><td>{{$stock['price']}}</td></tr>
        <tr><th>在庫数</th><td>{{$stock['number']}}</td></tr>
    </table>

    <form action="/list/delDone/{{$stock['id']}}">
        @csrf
        <input type="hidden" name="purchase_date" value="{{$stock['purchase_date']}}">
        <input type="hidden" name="deadline" value="{{$stock['deadline']}}">
        <input type="hidden" name="name" value="{{$stock['name']}}">
        <input type="hidden" name="price" value="{{$stock['price']}}">
        <input type="hidden" name="number" value="{{$stock['number']}}">
        <input type="submit" value="削除">
    </form>

    <div>
        <div>
            <a href="/list">一覧に戻る</a>
        </div>
    </div>

@endsection

