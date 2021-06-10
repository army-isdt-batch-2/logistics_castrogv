<?php

use Illuminate\Support\Facades\Route;

Route::get('/distribution',[
    App\Http\Controllers\DistributionController::class,
    'distribution'
])->name('distribution');

Route::get('/distribution/create',[
    App\Http\Controllers\DistributionController::class,
    'distribution_create'
])->name('distribution.create');

Route::post('/distribution/create/save',[
    App\Http\Controllers\DistributionController::class,
    'distribution_create_save'
])->name('distribution.create.save');

Route::get('/distribution/delete/{id}',[
    App\Http\Controllers\DistributionController::class,
    'distribution_delete'
])->name('distribution.delete');

Route::get('/distribution/update/{id}',[
    App\Http\Controllers\DistributionController::class,
    'distribution_update'
])->name('distribution.update');

Route::post('/distribution/update/{id}/save',[
    App\Http\Controllers\DistributionController::class,
    'distribution_update_save'
])->name('distribution.update.save');