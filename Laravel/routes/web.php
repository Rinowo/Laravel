<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\EmpController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect('/products');
});

Route::resource('products',ProductController::class);


Route::get('/emp', function () {
    return redirect('/employees');
});

Route::resource('employees',EmpController::class);
