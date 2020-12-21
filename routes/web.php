<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('authentication.login');
});

Route::get('/cadastrar', function () {
    return view('auth.register');
})->name('register');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');
