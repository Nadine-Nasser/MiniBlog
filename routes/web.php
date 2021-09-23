<?php

use App\Http\Controllers\manage\CategoryController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\manage\PostController;
use App\Http\Controllers\manage\ProfileController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class, 'index'])->name('home');


Auth::routes(['register' => false]);

Route::middleware(['auth'])->prefix('manage')->group(function () {

    Route::get('/dashboard', function () {
        return view('manage.pages.Single.dashboard');
    });

    Route::get('post',[PostController::class,'index'])->name('post.index');
    Route::get('post/create',[PostController::class,'create'])->name('post.create');
    Route::post('post/store',[PostController::class,'store'])->name('post.store');
    Route::get('post/edit/{post}',[PostController::class,'edit'])->name('post.edit');
    Route::put('post/update',[PostController::class,'update'])->name('post.update');
    Route::delete('post/delete/{post}',[PostController::class,'delete'])->name('post.delete');

    Route::get('category',[CategoryController::class,'index'])->name('category.index');
    Route::get('category/create',[CategoryController::class,'create'])->name('category.create');
    Route::post('category/store',[CategoryController::class,'store'])->name('category.store');
    Route::get('category/edit/{category}',[CategoryController::class,'edit'])->name('category.edit');
    Route::put('category/update',[CategoryController::class,'update'])->name('category.update');
    Route::delete('category/delete/{category}',[CategoryController::class,'delete'])->name('category.delete');


    Route::get('profile',[ProfileController::class,'index'])->name('profile.index');
    Route::put('profile/update',[ProfileController::class,'update'])->name('profile.update');





});

