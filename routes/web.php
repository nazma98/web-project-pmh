<?php

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
    return view('pages.home');
});

//Route::get('/', function () {
//    return view('welcome');});
Route::get('arts', function () {
    return view('pages.arts');
});
Route::get('blogs', function () {
    return view('pages.blogs');
});
Route::get('news', function () {
    return view('pages.news');
});
Route::get('poems', function () {
    return view('pages.poems');
});
Route::get('reading', function () {
    return view('pages.reading');
});
Route::get('astro', function () {
    return view('pages.astro');
});
Route::get('music', function () {
    return view('pages.music');
});