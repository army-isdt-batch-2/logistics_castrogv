<?php

use Illuminate\Support\Facades\Route;

Route::get('/transportation',[
    App\Http\Controllers\TransportationController::class,
    'transportation'
])->name('transportation');

Route::get('/transportation/create',[
    App\Http\Controllers\TransportationController::class,
    'transportation_create'
])->name('transportation.create');