<?php

use App\Http\Controllers\IniController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use ReCaptcha\RequestMethod\Post;
use App\Http\Controllers\BukuController;
use App\Models\Buku;

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

Route::get('/about', function () {
    return view('about', [
        "name" => "lala",
        "email" => "lala@gmail.com"
    ]);
});

Route::get('/buku', [BukuController::class,'index']);

Route::get('/boom', [PostController::class,'boomesport']);

Route::get('/prx',[PostController::class,'prxesport']);

Route::get('/fnatic',[PostController::class,'fnaticesprort']);

Route::get('/fpx',[PostController::class,'fpxesport']);

Route::get('/',[PostController::class,'beranda']);

Route::get('/buku/create',[BukuController::class,'create'])->name('buku.create');

Route::post('/buku',[BukuController::class,'store'])->name('buku.store');

Route::post('/buku/delete/{id}', [BukuController::class, 'destroy'])->name('buku.destroy');

