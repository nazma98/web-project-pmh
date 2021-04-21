<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BotManController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

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


Route::get('volunteering', function () {
    return view('pages.volun2');
});
Route::get('FirstAid', function () {
    return view('pages.firstaid');
});
Route::get('todolist', function () {
    return view('pages.todolist');
});
Route::get('travelling', function () {
    return view('pages.travel');
});

Route::match(['get', 'post'], '/botman', [BotManController::class, 'start']);

Route::middleware(['middleware'=>'PreventBackHistory'])->group(function() {
    Auth::routes();
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin','auth','PreventBackHistory']], function() {
    Route::get('dashboard',[AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('profile',[AdminController::class, 'profile'])->name('admin.profile');
    Route::get('settings',[AdminController::class, 'settings'])->name('admin.settings');
});

Route::group(['prefix'=>'user', 'middleware'=>['isUser','auth','PreventBackHistory']], function() {
    Route::get('dashboard',[UserController::class, 'index'])->name('user.dashboard');
    Route::get('profile',[UserController::class, 'profile'])->name('user.profile');
    Route::get('settings',[UserController::class, 'settings'])->name('user.settings');
});