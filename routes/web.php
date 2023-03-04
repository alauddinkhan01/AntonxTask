<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Vue\Admin\UsersController;

use App\Http\Controllers\Vue\Admin\AdminController as VueAdminController;

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


Auth::routes();

//User Routed
Route::middleware(['isUser'])->group(function () {
   
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
});
// Admin Routes
Route::prefix('/admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::post('logout', [VueAdminController::class, 'logout'])->name('vue-admin-logout');
    Route::get('home', [AdminController::class, 'dashboard'])->name('admin-home');
    Route::get('dashboard', [VueAdminController::class, 'dashboard'])->name('vue-admin-dashboard');

    Route::controller(UsersController::class)->group(function () {
        Route::get('/users', 'users')->name('admin.users.index');
        Route::get('/category-author-books', 'category_author_books')->name('admin.category.auther.books');
    });

});
