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

Route::post('/asset/create/save',[
    App\Http\Controllers\AssetController::class,
    'asset_create_save'
])->name('asset.create.save');

Route::get('/asset/delete/{id}',[
    App\Http\Controllers\AssetController::class,
    'asset_delete'
])->name('asset.delete');

Route::get('/asset/update/{id}',[
    App\Http\Controllers\AssetController::class,
    'asset_update'
])->name('asset.update');

Route::post('/asset/update/{id}/save',[
    App\Http\Controllers\AssetController::class,
    'asset_update_save'
])->name('asset.update.save');