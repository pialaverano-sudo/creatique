
<?php

use Illuminate\Support\Facades\Route;

// Homepage and portfolio generator
Route::get('/', function () {
    return view('portfolio');
});

// Template selection page
Route::get('/templates', function () {
    return view('templates');
});

// Portfolio page
Route::get('/portfolio', function () {
    return view('portfolio');
});

// Create portfolio page
Route::get('/create', function () {
    return view('portfolio');
});
