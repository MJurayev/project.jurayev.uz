<?php

use App\Http\Controllers\AdminsController;
use \App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Session\Session;


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

Route::get('/setlocale/{locale}',function($lang){
    \session()->put('locale', $lang);
    return redirect()->back();
});

Route::middleware('langSwitcher')
    ->group(function (){
        Route::get('/blog', [HomeController::class, 'blogAction'])->name('blog');
    Route::get('/', [HomeController::class, 'index'])->name('home');
//    Route::post('/message/add', [MessageController::class, 'add'])->name('sendMessage');
//        Route::get('/about_us', [HomeController::class, 'about_us'])->name('about_us');
});
Auth::routes();
Route::prefix('admin')
    ->middleware(['auth', 'admin', 'langSwitcher'])
    ->group( function (){
    Route::get('/', function(){ return redirect('/admin/users'); });
    Route::get('/users', [UsersController::class, 'index'])->name('AdminUsers');
//    Route::get('/user/{id}', [UsersController::class, 'editById']);
    Route::get('/user/edit/{id}', [UsersController::class, 'editById']);
    Route::post('/user/edit/{id}', [UsersController::class, 'editedSaveById']);
    Route::get('/user/delete/{id}', [UsersController::class, 'deleteById']);

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('AdminDashboard');
    Route::get('/posts', [PostsController::class, 'index'])->name('AdminPosts');
    Route::get('/admins', [AdminsController::class, 'index'])->name('AdminAdmins');
    Route::get('/profile', [ProfileController::class, 'index'])->name('AdminProfile');
    Route::get('/report', [DashboardController::class, 'index'])->name('AdminReportIssues');

    Route::get('/post/show/{title}',[PostsController::class, 'showByTitle']);
    Route::get('/post/delete/{id}', [PostsController::class, 'removeById']);

    Route::post('/post/save', [PostsController::class, 'savePost'])->name('savePost');

    Route::get('/post/edit/{id}', [PostsController::class, 'editById'])->name('editPost');
    Route::get('/post/add', [PostsController::class, 'addPost'])->name('addPost');
    Route::post('/post/edit/save', [PostsController::class, 'editAndSave'])->name('editAndSave');

});
