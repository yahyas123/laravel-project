<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/home', function () {
    return view('home');
}); 
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/ourteam', function () {
    return view('ourteam');
})->name('ourteam');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::prefix('program')->group(function () {
    
    Route::get('/', function () {
        return view('program', ['slug' => null]); 
    })->name('program.index');
    
    Route::get('/{slug}', function ($slug) {
        return view('program', ['slug' => $slug]);
    })->name('program.detail');
});


Route::fallback(function () {
    return 'Page Not Found';
});

