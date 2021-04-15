<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;
use App\Http\Requests\ValidateRequest;

class StockController extends Controller
{
    public function index(Request $request)
    {
        $stocks = Stock::query()->simplePaginate(10);
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
        return redirect('/list');
    }

    public function show(Request $request,$id)
    {
        $stock = Stock::find($id);
        return view('stock.show', ['stock' => $stock]);
    }

    public function edit(Request $request,$id)
    {
        $stock = Stock::find($id); //idによるレコード検索
        return view('stock.edit', ['stock' => $stock]);
    }

    public function editCheck(ValidateRequest $request,$id)
    {
        $id = $request->id;
        $purchase_date = $request->purchase_date;
        $deadline = $request->deadline;
        $name = $request->name;
        $price = $request->price;
        $number = $request->number;

        $s = [
            'id' => $id,
            'purchase_date' => $purchase_date,
            'deadline' => $deadline,
            'name' => $name,
            'price' => $price,
            'number' => $number
        ];

        return view('stock.editCheck', ['s' => $s]);
    }

    public function editDone(Request $request,$id)
    {
        $stock = Stock::find($id); //idによるレコード検索
        $form = $request->all(); //保管する値を用意
        unset($form['_token']); //フォームに追加される非表示フィールド(テーブルにない)「_token」のみ削除しておく
        $stock->fill($form)->save(); //インスタンスに値を設定して保存
        return redirect('/list');
    }

}
