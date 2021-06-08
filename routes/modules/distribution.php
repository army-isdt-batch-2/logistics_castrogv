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