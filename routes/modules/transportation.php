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

Route::post('/transportation/create/save',[
    App\Http\Controllers\TransportationController::class,
    'transportation_create_save'
])->name('transportation.create.save');

Route::get('/transportation/delete/{id}',[
    App\Http\Controllers\TransportationController::class,
    'transportation_delete'
])->name('transportation.delete');

Route::get('/transportation/update/{id}',[
    App\Http\Controllers\TransportationController::class,
    'transportation_update'
])->name('transportation.update');

Route::post('/transportation/update/{id}/save',[
    App\Http\Controllers\TransportationController::class,
    'transportation_update_save'
])->name('transportation.update.save');