<?php

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

route::get('/profile', [ProfileController::class, 'index']);
