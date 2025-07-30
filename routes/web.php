<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home');  // renders resources/js/Pages/Home.vue
});
Route::get('/blogs', function () {
    return Inertia::render('blogs');
});
Route::get('/projects', function () {
    return Inertia::render('Projects');
});
Route::get('/contact', function () {
    return Inertia::render('Contact');
});

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
