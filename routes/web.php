<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/landing', function () {
    return view('landing_page');
});
Route::get('/login', function () {
    return view('login_page');
});
