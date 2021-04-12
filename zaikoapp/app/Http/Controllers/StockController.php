<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;
use App\Http\Requests\ValidateRequest;

class StockController extends Controller
{
    public function index(Request $request)
    {
        $stocks = Stock::all();
        return view('stock.list', ['stocks' => $stocks]);
    }

    public function add(Request $request)
    {
        return view('stock.add');
    }

    public function addCheck(ValidateRequest $request)
    {
        $purchase_date = $request->purchase_date;
        $deadline = $request->deadline;
        $name = $request->name;
        $price = $request->price;
        $number = $request->number;

        $s = [
            'purchase_date' => $purchase_date,
            'deadline' => $deadline,
            'name' => $name,
            'price' => $price,
            'number' => $number
        ];

        return view('stock.addCheck', ['s' => $s]);
    }

    public function addDone(Request $request)
    {
        $stock = new Stock; // Stockインスタンス作成(保存作業)
        $form = $request->all(); //保管する値を用意
        unset($form['_token']); //フォームに追加される非表示フィールド(テーブルにない)「_token」のみ削除しておく
        $stock->fill($form)->save(); //インスタンスに値を設定して保存
        return redirect('/list'); // routes/web.php Routeのlist(保存されてるデータ表示)
    }

}
