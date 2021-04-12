<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StockController;
use App\Http\Controllers\BranchController;

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

Route::post('list/branch', [BranchController::class, 'branch']);

Route::get('list/add', [StockController::class, 'add']);
Route::post('list/addCheck', [StockController::class, 'addCheck']);
Route::get('list/addDone', [StockController::class, 'addDone']);

