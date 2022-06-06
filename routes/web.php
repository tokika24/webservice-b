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
Route::get('add-mahasiswa',[MahasiswaController::class, 'create'])->name('create.mahasiswa');
Route::post('getDataM',[MahasiswaController::class, 'ambilData'])->name('mahasiswa.getDataM');
Route::delete('delete-mahasiswa/{id}', [MahasiswaController::class, 'destroy'])->name('delete.mahasiswa');
Route::get('edit-mahasiswa/{id}/edit', [MahasiswaController::class, 'edit'])->name('edit.mahasiswa');
Route::put('edit-mahasiswa/{id}', [MahasiswaController::class, 'update'])->name('update.mahasiswa');

//tugas Blog:
Route::get('data-blog',[BlogController::class, 'index']);
Route::get('add-blog',[BlogController::class, 'create']);
Route::post('getData',[BlogController::class, 'ambilData'])->name('blog.getData');
Route::delete('delete-blog/{id}', [BlogController::class, 'destroy'])->name('delete.blog');
Route::get('edit-blog/{id}/edit', [BlogController::class, 'edit'])->name('edit.blog');
Route::put('edit-blog/{id}', [BlogController::class, 'update'])->name('update.blog');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
