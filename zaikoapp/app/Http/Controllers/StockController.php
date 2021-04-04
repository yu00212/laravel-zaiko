<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index(Request $request)
    {
        $stocks = Stock::all();
        return view('stock.list', ['stocks' => $stocks]); // stock/list.blade.php
    }

    public function find(Request $request)
    {
        return view('stock.find', ['input' => '']);
    }

    public function search(Request $request)
    {
        $item = Stock::where('name', $request->input)->first(); // 名前による検索で最初のレコードを表示 find(整数（通常はプライマルキー)
        $param = ['input' => $request->input, 'item' => $item];
        return view('stock.find', $param);
    }

    public function add(Request $request)
    {
        // views/stock/add.blade.php
        return view('stock.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, Stock::$rules); // app/Models/Stock.php定義のバリデーション実行
        $stock = new Stock; // Stockインスタンス作成(保存作業)
        $form = $request->all(); //保管する値を用意
        unset($form['_token']); //フォームに追加される非表示フィールド(テーブルにない)「_token」のみ削除しておく
        $stock->fill($form)->save(); //インスタンスに値を設定して保存
        return redirect('/list'); // routes/web.php Routeのlist(保存されてるデータ表示)
    }
}
