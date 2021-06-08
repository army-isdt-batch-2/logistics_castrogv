<?php

use Illuminate\Support\Facades\Route;

Route::get('/deliveries',[
    App\Http\Controllers\DeliveriesController::class,
    'deliveries'
])->name('deliveries');

Route::get('/deliveries/create',[
    App\Http\Controllers\DeliveriesController::class,
    'deliveries_create'
])->name('deliveries.create');