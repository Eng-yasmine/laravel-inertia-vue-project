<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return inertia::render('Home');
});

//about page route inertia helper
Route::get('/about',function(){
    return inertia('About');
});

//rout inertia
Route::inertia('user','Users',['username'=>'yasmeen']);

Route::get('/profile',[UserController::class,'index']);
