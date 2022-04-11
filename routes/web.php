<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;

use Illuminate\Support\Facades\Route;
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
    return view('about');
});

Route::get('/gallery', function () {
return view('galery');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/nama', function () {
    return 'tok ika';
});

Route::get('/dari-view', function () {
    return view('home');
});

Route::get('/tentang-saya', function () {
    return view('about');
});

Route::get('/profile', [ProfileController::class, 'index']);



Route::view('master', 'template/master');

//route mahasiswa
Route::get('data-mahasiswa',[MahasiswaController::class, 'index']);
Route::get('add-mahasiswa',[MahasiswaController::class, 'create']);
Route::post('getDataM',[MahasiswaController::class, 'ambilData'])->name('mahasiswa.getDataM');

//tugas 3
Route::get('data-blog',[BlogController::class, 'index']);
Route::get('add-blog',[BlogController::class, 'create']);
Route::post('getData',[BlogController::class, 'ambilData'])->name('blog.getData');