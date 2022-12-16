<?php

use App\Http\Controllers\LaporanController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
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
    return view('home');
});


Route::get('/item', function () {
    return view('item');
});

Route::get('/tampilan', function () {
    return view('tampilan');
});

Route::get('/tampilanpdf', function () {
    return view('tampilanpdf');
});

Route::get('/buy', function () {
    return view('buy');
});

Route::get('/transaksi', function () {
    return view('transaksi');
});

Route::get('buy/{id}', function ($id) {
    return view('buy')->with('id', $id);
});

Route::get('/process.php', function () {
    return view('process');
});

Route::resource('user/form-products', 'App\\Http\\Controllers\\User\formProductsController');
Route::resource('admin/form-user', 'App\\Http\\Controllers\\Admin\formUserController');
Route::resource('admin/form-products', 'App\\Http\\Controllers\\Admin\formProductsController');
Route::resource('admin/form-bank', 'App\\Http\\Controllers\\Admin\formBankController');
Route::resource('admin/form-kategori', 'App\\Http\\Controllers\\Admin\formKategoriController');
Route::resource('admin/form-cart', 'App\\Http\\Controllers\\Admin\formCartController');
Route::resource('admin/form-transaction', 'App\\Http\\Controllers\\Admin\formTransactionController');
Route::resource('admin/formtransaction_detail', 'App\\Http\\Controllers\\Admin\formtransaction_detailController');
Route::resource('admin/pembayaran', 'App\Http\Controllers\Admin\pembayaranController');
Route::get('/tampilan', [LaporanController::class,'index']);
Route::get('/tampilanppdf', [LaporanController::class,'cetak_pdf']);