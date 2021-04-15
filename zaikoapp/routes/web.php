<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StockController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('list', [StockController::class, 'index']);

Route::get('list/add', [StockController::class, 'add']);
Route::post('list/addCheck', [StockController::class, 'addCheck']);
Route::get('list/addDone', [StockController::class, 'addDone']);

Route::get('list/show/{id}', [StockController::class, 'show']);

Route::get('list/edit/{id}',[StockController::class, 'edit']);
Route::post('list/editCheck/{id}',[StockController::class, 'editCheck']);
Route::get('list/editDone/{id}',[StockController::class, 'editDone']);


