<?php

use Illuminate\Support\Facades\Route;

Route::get('/supplier',[
    App\Http\Controllers\SuppliersController::class,
    'supplier'
])->name('supplier');

Route::get('/supplier/create',[
    App\Http\Controllers\SuppliersController::class,
    'supplier_create'
])->name('supplier.create');

Route::post('/supplier/create/save',[
    App\Http\Controllers\SuppliersController::class,
    'supplier_create_save'
])->name('supplier.create.save');

Route::get('/supplier/delete/{id}',[
    App\Http\Controllers\SuppliersController::class,
    'supplier_delete'
])->name('delete');

Route::get('/supplier/update/{id}',[
    App\Http\Controllers\SuppliersController::class,
    'supplier_update'
])->name('update');

Route::post('/supplier/update/{id}/save',[
    App\Http\Controllers\SuppliersController::class,
    'supplier_update_save'
])->name('update.save');

