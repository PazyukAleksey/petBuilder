<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuilderController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [BuilderController::class, 'index']);