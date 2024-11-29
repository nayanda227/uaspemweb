<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home'); // Pastikan file Blade `home.blade.php` ada di `resources/views`
})->name('home');

Route::get('/about', function () {
    return view('about'); // Pastikan file Blade `about.blade.php` ada
})->name('about');

Route::get('/course', function () {
    return view('course'); // Tambahkan file Blade `course.blade.php` jika belum
})->name('course');

Route::get('/contact', function () {
    return view('contact'); // Pastikan file Blade `contact.blade.php` ada
})->name('contact');
Route::get('/register', function () {
    return view('register'); // Pastikan file Blade `contact.blade.php` ada
})->name('register');
Route::get('/login', function () {
    return view('login'); // Pastikan file Blade `contact.blade.php` ada
})->name('login');