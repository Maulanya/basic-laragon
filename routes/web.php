<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');

Route::get('/hello', function () {
    return ('hello world');
});

Route::get('/mahasiswa/{nama}/{kelas}', function ($nama, $kelas) {
    return "tampilakn data mahasiswa bernama $nama saya kelas $kelas";
});


Route::get('/siswa', function() {
    $array_nama = ['dika', "ajiz", "putu"];
    return view('universitas\mahasiswa')->with('mahasiswa', $array_nama);
});

