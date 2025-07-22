<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/login', [UserController::class, 'login'])->name('user.login');
Route::post('/user/processLogin', [UserController::class, 'processLogin'])->name('login.verificar');
Route::get('/user/menu', [UserController::class, 'menu'])->name('user.menu');
Route::get('/user/logout', [UserController::class, 'logout'])->name('user.logout');

Route::controller(ProductController::class)->group(function () {
    Route::get('/product', 'index')->name('product.index');
    Route::get('/product/create', 'create')->name('product.create');
    Route::post('/product/save', 'save')->name('product.save');
    Route::get('/product/{id}/edit', 'edit')->name('product.edit');
    Route::put('/product/{id}/update', 'update')->name('product.update');
    Route::get('/product/{id}/deleteconfirm', 'deleteconfirm')->name('product.confirm');
    Route::delete('/product/{id}/delete', 'delete')->name('product.delete');
});
