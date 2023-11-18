<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyTest;
use App\Http\Controllers\BookManageController;
use App\Http\Controllers\MoneyBookController;
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
Route::get('/myurl', [MyTest::class, 'index']);
Route::get('/bookmanage/', [BookManageController::class, 'index'])->name('bookmanage.index');
Route::post('/bookmanage/post', [BookManageController::class, 'post'])->name('bookmanage.post');

Route::get('/moneybook/input_cash/', [MoneyBookController::class, 'inputcash'])->name('inputcash');
Route::post('/moneybook/input_cash/input_form_post', [MoneyBookController::class, 'postInputCashInputForm'])->name('inputcash.input.formpost');
Route::post('/moneybook/input_cash/input_list_post', [MoneyBookController::class, 'postInputCashInputList'])->name('inputcash.input.listpost');
Route::post('/moneybook/input_cash/updt_table_post', [MoneyBookController::class, 'postInputCashUpdtTable'])->name('inputcash.updt.tablepost');
Route::post('/moneybook/input_cash/dlt_table_post', [MoneyBookController::class, 'postInputCashDltTable'])->name('inputcash.dlt.tablepost');
