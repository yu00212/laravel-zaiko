@extends('layouts.layout')

@section('content')

    <h1>在庫編集</h1>

    <form action="/list/editCheck/{{$stock->id}}" method="post">
    <table>
        @csrf
        @error('purchase_date')
            <tr><th>❗️</th>
            <td>{{$message}}</td></tr>
        @enderror
        <tr><th>購入日</th><td><input type="date" name="purchase_date" value="{{$stock->purchase_date}}"></td></tr>

        @error('deadline')
            <tr><th>❗️</th>
            <td>{{$message}}</td></tr>
        @enderror
        <tr><th>期限</th><td><input type="date" name="deadline" value="{{$stock->deadline}}"></td></tr>

        @error('name')
            <tr><th>❗️</th>
            <td>{{$message}}</td></tr>
        @enderror
        <tr><th>商品名</th><td><input type="text" name="name" value="{{$stock->name}}"></td></tr>

        @error('price')
            <tr><th>❗️</th>
            <td>{{$message}}</td></tr>
        @enderror
        <tr><th>値段</th><td><input type="text" name="price" value="{{$stock->price}}"></td></tr>

        @error('number')
            <tr><th>❗️</th>
            <td>{{$message}}</td></tr>
        @enderror
        <tr><th>在庫数</th><td><input type="number" name="number" value="{{$stock->number}}"></td></tr>

        <tr><th></th><td><input type="submit" value="登録"></td></tr>
    </table>
    </form>

    <div class="row">
        <div class="col-sm-12">
            <a href="/list" class="btn btn-primary" style="margin:20px;">一覧に戻る</a>
        </div>
    </div>

@stop
