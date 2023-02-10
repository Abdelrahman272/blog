<?php

use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function () {
    Route::prefix('admin')->middleware('auth')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::prefix('blog')->group(function () {
            Route::get('index', [BlogController::class, 'index'])->name('blog');
            Route::get('create', [BlogController::class, 'create'])->name('create_blog');
            Route::post('store', [BlogController::class, 'store'])->name('store_blog');
            Route::post('update/{id}', [BlogController::class, 'update'])->name('update_blog');
            Route::get('edit/{id}', [BlogController::class, 'edit'])->name('edit_blog');
            Route::get('delete/{id}', [BlogController::class, 'destroy'])->name('delete_blog');
        });






    });
});
