<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home'); 
})->name('home');

Route::get('/about', function () {
    return view('about'); 
})->name('about');

Route::get('/course', function () {
    return view('course'); 
})->name('course');

Route::get('/contact', function () {
    return view('contact'); 
})->name('contact');
Route::get('/register', function () {
    return view('register'); 
})->name('register');
Route::get('/login', function () {
    return view('login'); 
})->name('login');
Route::get('/membership', function () {
    return view('membership'); 
})->name('membership');
