<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/applicant', function () {
    return view('applicant');
})->name('applicant');

Route::get('/student', function () {
    return view('student');
})->name('student');

Route::redirect('/index.html', '/');
Route::redirect('/about.html', '/about');
Route::redirect('/applicant.html', '/applicant');
Route::redirect('/student.html', '/student');
