<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BotManController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\musicController;
use App\Http\Controllers\shareboardcontroller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\movieController;
use App\Http\Controllers\videoController;
use App\Http\Controllers\AdminViewShareController;
use App\Http\Controllers\AdminViewMusicController;
use App\Http\Controllers\AdminViewVideoController;
use App\Http\Controllers\AdminViewMovieController;
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
    return view('pages.guest');
});
Route::get('garts', function () {
    return view('guest.arts');
});
Route::get('gastro', function () {
    return view('guest.testAst');
});
Route::get('gpoems', function () {
    return view('guest.poems');
});
Route::get('gtravelling', function () {
    return view('guest.travel');
});
Route::get('gFirstAid', function () {
    return view('guest.firstaid');
});
Route::get('gtodolist', function () {
    return view('guest.todolist');
});
Route::get('gtvideo', function () {
    return view('guest.tvideo');
});


Route::get('home', function () {
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
Route::get('travelling', function () {
    return view('pages.travel');
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
Route::get('/seepost', function () {
    return view('pages.seepost');
});

Route::get('/sharepost', function () {
    return view('pages.sharepost');
});
Route::get('/uploadMusic', function () {
    return view('pages.uploadMusic');
});
Route::get('/uploadMovie', function () {
    return view('pages.uploadMovie');
});

Route::get('/uploadVideo', function () {
    return view('pages.uploadVideo');
});
Route::get('/searchmusic', function () {
    return view('pages.searchmusic');
});

Route::get('/searchmovie', function () {
    return view('pages.searchmovie');
});
Route::get('add', function () {
    return view('pages.donation');
});
Route::post('add',[DonorController::class,'addData']);

Route::get('showdonor',[DonorController::class,'show']);

Route::get('seepost', [shareboardcontroller::class, 'showPost']);
Route::post('seepost', [shareboardcontroller::class, 'doShare']);

Route::match(['get', 'post'], '/botman', [BotManController::class, 'start']);

Route::get('music',[musicController::class, 'showMusic']);
Route::post('music',[musicController::class, 'storeMusic']);
Route::get('searchmusic',[musicController::class, 'searchMusic']);

Route::get('movies',[movieController::class, 'showMovie']);
Route::post('movies',[movieController::class, 'storeMovie']);
Route::get('searchmovie',[movieController::class, 'searchMovie']);

Route::get('svideo',[videoController::class, 'showVideo']);
Route::post('svideo',[videoController::class, 'storeVideo']);


Route::middleware(['middleware'=>'PreventBackHistory'])->group(function() {
    Auth::routes();
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

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


Route::get('adminBlog',[AdminViewShareController::class,'showPost']);
Route::get('delete/{id}',[AdminViewShareController::class,'delete']);
Route::get('adminMusic',[AdminViewMusicController::class,'showPost']);
Route::get('delete/{id}',[AdminViewMusicController::class,'delete']);
Route::get('adminVideo',[AdminViewVideoController::class,'showPost']);
Route::get('delete/{id}',[AdminViewVideoController::class,'delete']);
Route::get('adminMovie',[AdminViewMovieController::class,'showPost']);
Route::get('delete/{id}',[AdminViewMovieController::class,'delete']);

//Route::get('adminMusic',[AdminViewShareController::class,'showMusic']);
//Route::get('delete/{id}',[AdminViewShareController::class,'deleteMusic']);
