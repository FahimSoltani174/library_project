<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

route::get('/', [HomeController::class, 'index']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/home', [AdminController::class, 'index']);
route::get('/category_page', [AdminController::class, 'category_page']);
route::post('/add_category', [AdminController::class, 'add_category']);
route::get('/cat_delete/{id}', [AdminController::class, 'cat_delete']);
