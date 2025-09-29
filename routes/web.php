<?php

use Illuminate\Support\Facades\Route;
Route::get('/home', function () {
    return view('home');
});
Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/ourteam', function () {
    return view('ourteam');
});
Route::get('/program', function () {
    return view('program');
});


Route::fallback(function () {
    return 'Page Not Found';
});