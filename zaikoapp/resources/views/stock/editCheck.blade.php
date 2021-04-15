@extends('layouts.layout')

@section('title', '在庫編集')

@section('menubar')
    @parent
    在庫編集ページ
@endsection

@section('content')

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
        <tr><th>購入日</th><td>{{$s['purchase_date']}}</td></tr>
        <tr><th>期限</th><td> {{$s['deadline']}}</td></tr>
        <tr><th>商品名</th><td>{{$s['name']}}</td></tr>
        <tr><th>値段</th><td>{{$s['price']}}</td></tr>
        <tr><th>在庫数</th><td>{{$s['number']}}</td></tr>
    </table>

    <form action="/list/editDone/{{$s['id']}}">
        @csrf
        <input type="hidden" name="purchase_date" value="{{$s['purchase_date']}}">
        <input type="hidden" name="deadline" value="{{$s['deadline']}}">
        <input type="hidden" name="name" value="{{$s['name']}}">
        <input type="hidden" name="price" value="{{$s['price']}}">
        <input type="hidden" name="number" value="{{$s['number']}}">
        <input type="submit" value="更新">
    </form>

    <div class="row">
        <div class="col-sm-12">
            <a href="/list" class="btn btn-primary" style="margin:20px;">一覧に戻る</a>
        </div>
    </div>

@endsection

@section('footer')
copyright 2020 tuyano
@endsection
