<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/rodel', function () {
    return view('rodel'); 
});
Route::get('/home', function () {
    return view('home'); 
});