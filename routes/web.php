<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/about', function () {
    return inertia('About');
});

Route::inertia('user', 'Users', ['username' => 'yasmeen']);

/*
    GET  → يعرض الصفحة (اسمها string: Auth/Register)
    POST → يبعت البيانات للـ Controller

    مهم:
    Route::inertia() بتاخد اسم الصفحة كنص بس
    مش Controller ولا function
*/
Route::get('/register', [AuthController::class, 'create']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/profile', [UserController::class, 'index']);
