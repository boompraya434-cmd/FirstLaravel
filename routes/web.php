<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/a', function(){
    return view('page2');
});

Route::get('/b', function(){
    return view('page3');
});