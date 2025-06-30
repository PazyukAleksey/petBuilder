<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuilderController;

Route::get('/', [BuilderController::class, 'index'])
        ->name('builder.index');;
Route::get('/register', [BuilderController::class, 'register'])
        ->name('builder.register');;