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
Route::get('svideo', function () {
    return view('pages.videos');
});
Route::get('volunteering', function () {
    return view('pages.volun2');
});
Route::get('FirstAid', function () {
    return view('pages.firstaid');
});
Route::get('todolist', function () {
    return view('pages.todolist');
});
Route::get('game', function () {
    return view('pages.game');
});
Route::get('sudoko', function () {
    return view('pages.sudoko');
});

Route::get('Story_telling', function () {
    return view('pages.storytelling');
});
Route::get('/share', function () {
    return view('pages.shareboardindex');
});
Route::get('/shares', function () {
    return view('pages.shareboardadd');
});
Route::get('/tvideo', function () {
    return view('pages.tvideo');
});
Route::get('/donation', function () {
    return view('pages.donation');
});
Route::get('/steps', function () {
    return view('pages.steps');
});
Route::get('/steps2', function () {
    return view('pages.steps2');
});

    Route::get('/counsiling', function () {
    return view('pages.counselling');
});
Route::match(['get', 'post'], '/botman', [BotManController::class, 'start']);

