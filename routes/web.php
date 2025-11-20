<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\site\indexController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/site/index', [indexController::class, 'index'])->name('index');