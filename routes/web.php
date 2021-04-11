<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BotManController;

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

Route::get('bot', function () {
    return view('pages.chatbot');
});
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
    return view('pages.testAst');
});
Route::get('music', function () {
    return view('pages.music');
});
Route::get('movies', function () {
    return view('pages.movies');
});

Route::match(['get', 'post'], '/botman', [BotManController::class, 'start']);

