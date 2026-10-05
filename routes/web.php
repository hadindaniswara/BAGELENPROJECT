<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - Assignment Week 03
|--------------------------------------------------------------------------
*/

// 1. REDIRECT: Mengalihkan root (/) ke /home
Route::redirect('/', '/home');

// 2. ROUTE HOME
Route::get('/home', function () {
    return view('home');
});

// 3. ROUTE ABOUT
Route::get('/about', function () {
    return view('about');
});

// 4. ROUTE PROGRAM
Route::get('/company/program', function () {
    return view('program');
});

// 5. ROUTE OUR TEAM
Route::get('/company/our-team', function () {
    return view('team');
});

// 6. ROUTE CONTACT US
Route::get('/contact-us', function () {
    return view('contact');
});
