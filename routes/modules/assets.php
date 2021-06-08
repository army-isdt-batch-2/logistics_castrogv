<?php

use Illuminate\Support\Facades\Route;

Route::get('/asset',[
    App\Http\Controllers\AssetController::class,
    'asset'
])->name('asset');

Route::get('/asset/create',[
    App\Http\Controllers\AssetController::class,
    'asset_create'
])->name('asset.create');