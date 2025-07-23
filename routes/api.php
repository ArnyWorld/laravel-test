<?php

use App\Http\Controllers\WSProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::resource('/wsproduct', WSProductController::class);;
