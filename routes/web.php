<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExpertController;
use App\Http\Controllers\IssueController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\YearController;
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
// salom
Route::get('/', [SiteController::class, 'index'])->name('index');

Route::get('/login', [AuthController::class, 'index'])->name('login.index');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/register',[AuthController::class,'registerStore'])->name('register.store');


Route::get('/',[SiteController::class,'index'])->name('index');
Route::get('/about',[SiteController::class,'about'])->name('about');
Route::get('/news',[SiteController::class,'news'])->name('news');
Route::get('/news/{news}',[SiteController::class,'newsShow'])->name('newsShow');
Route::get('/archive',[SiteController::class,'archive'])->name('archive');
Route::get('/experts',[SiteController::class,'experts'])->name('experts');
Route::get('/contact',[SiteController::class,'contact'])->name('contact');

Route::group(['prefix' => 'admin', 'middleware'=>'role:admin'], function (){
    Route::redirect('/','admin/home')->name('admin.index');
    Route::get('/home', [AdminController::class, 'home'])->name('admin.home');

    Route::resource('years', YearController::class,[
        'except' => ['create','edit','show'],
        'as' => 'admin'
    ]);


    Route::resource('issues', IssueController::class,[
        'except' => ['create','edit'],
        'as' => 'admin'
    ]);

    Route::resource('news', NewsController::class,[
        'as' => 'admin'
    ]);

    Route::resource('experts', ExpertController::class,[
        'as' => 'admin',
        'except' => 'show'
    ]);

});
Route::get('files/journal/{file}', [IssueController::class,'journalDownload'])->name('files.journal');

Route::group(['prefix' => 'profile', 'middleware'=>'role:user'], function (){
    Route::get('/', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/home', [ProfileController::class, 'home'])->name('profile.home');
    Route::get('/settings', [ProfileController::class, 'settings'])->name('profile.settings');

    Route::resource('article', ArticleController::class,[
        'as' => 'profile',
    ]);

});
