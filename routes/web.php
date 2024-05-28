<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('hh', function() {
    return "haha";
    // return view('');
});

Route::get('index',function() {
    return view('index-material');
});

Route::get('halaman',function(){
    return view('volting');
});