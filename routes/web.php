<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DoiController;
use App\Http\Controllers\ExpertController;
use App\Http\Controllers\IssueController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\TelegramController;
use App\Http\Controllers\UserController;
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
Route::get('/otp', [AuthController::class,'otp'])->name('otp');
Route::post('/otp', [AuthController::class,'otp_check'])->name('otp.check');
Route::get('/re_otp', [AuthController::class,'re_otp'])->name('re_otp');


Route::get('lang/{lang}',[LanguageController::class, 'setLanguage']  )->name('language');


Route::get('/',[SiteController::class,'index'])->name('index');
Route::get('/about',[SiteController::class,'about'])->name('about');
Route::get('/news',[SiteController::class,'news'])->name('news');
Route::get('/news/{news}',[SiteController::class,'newsShow'])->name('newsShow');
Route::get('/archive',[SiteController::class,'archive'])->name('archive');
Route::get('/archive/{issue}',[SiteController::class,'dois'])->name('archive.dois');
Route::get('/research/{doi}',[SiteController::class,'doi_show'])->name('archive.doi.show');

Route::get('/experts',[SiteController::class,'experts'])->name('experts');

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


    Route::get('/articles', [ArticleController::class, 'all'])->name('admin.articles');
    Route::get('/articles/add', [ArticleController::class, 'add'])->name('admin.articles.add');
    Route::get('/article/{article}', [ArticleController::class, 'details'])->name('admin.article.details');
    Route::get('/article/{article}/status', [ArticleController::class, 'status'])->name('admin.article.status');
    Route::post('/article/{article}/comment', [ArticleController::class, 'comment'])->name('admin.article.comment');

    Route::get('/dois', [DoiController::class, 'index'])->name('admin.dois');
    Route::get('/add_doi', [DoiController::class, 'create'])->name('admin.dois.create');
    Route::post('/add_doi', [DoiController::class, 'store']);
    Route::delete('/doi/delete/{doi}',[DoiController::class, 'destroy'])->name('admin.dois.destroy');
});

Route::get('files/journal/{file}', [IssueController::class,'journalDownload'])->name('files.journal');
Route::get('dois/file/{file}', [DoiController::class,'download'])->name('dois.file');

Route::group(['prefix' => 'profile', 'middleware'=>'role:user'], function (){
    Route::get('/', [UserController::class, 'index'])->name('profile.index');
    Route::get('/home', [UserController::class, 'home'])->name('profile.home');
    Route::get('/settings', [UserController::class, 'edit'])->name('profile.settings');
    Route::post('/settings', [UserController::class, 'update']);
    Route::post('/updatePassword',[UserController::class, 'updatePassword'])->name('profile.updatePassword');

    Route::resource('/article', ArticleController::class,[
        'as' => 'profile',
    ]);

});


//telegram bot configuration

Route::get('telegram/get-me',[TelegramController::class, 'getMe'])->name('telegram-getme');
Route::get('telegram/web-hook',[TelegramController::class, 'setWebHook'])->name('telegram-setWebHook');
