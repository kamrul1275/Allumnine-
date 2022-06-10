<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuperAdminController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'Index']);

Route::get('/home', [HomeController::class, 'redirect']);





Route::get('/create',[AdminController::class, 'CreatePost']);



Route::get('/test', function () {


    return 'i am student';
});









Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



// super admin

// Route::get('/super-admin', [SuperAdminController::class, 'index']);



