<?php

use Illuminate\Support\Facades\Route;

Route::get('/returns',[
    App\Http\Controllers\ReturnsController::class,
    'returns'
])->name('returns');

Route::get('/returns/create',[
    App\Http\Controllers\ReturnsController::class,
    'returns_create'
])->name('returns.create');