<?php

use Illuminate\Support\Facades\Route;

Route::get('/storage',[
    App\Http\Controllers\StorageController::class,
    'storage'
])->name('storage');

Route::get('/storage/create',[
    App\Http\Controllers\StorageController::class,
    'storage_create'
])->name('storage.create');

Route::post('/storage/create/save',[
    App\Http\Controllers\StorageController::class,
    'storage_create_save'
])->name('storage.create.save');

Route::get('/storage/delete/{id}',[
    App\Http\Controllers\StorageController::class,
    'storage_delete'
])->name('storage.delete');

Route::get('/storage/update/{id}',[
    App\Http\Controllers\StorageController::class,
    'storage_update'
])->name('storage.update');

Route::post('/storage/update/{id}/save',[
    App\Http\Controllers\StorageController::class,
    'storage_update_save'
])->name('storage.update.save');