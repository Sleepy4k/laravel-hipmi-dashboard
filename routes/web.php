<?php

use App\Http\Controllers\Error;
use App\Http\Controllers\Landing;
use Illuminate\Support\Facades\Route;

Route::get('/', Landing\HomeController::class)->name('landing');
Route::get('/about', Landing\AboutController::class)->name('about');

Route::resource('/activity', Landing\ActivityController::class)
    ->only('index', 'show')
    ->name('index', 'activity');

Route::get('/product', function () {
    return inertia('Landing/Home');
})->name('product');

Route::get('/member', function () {
    return inertia('Landing/Home');
})->name('member');

require __DIR__.'/auth.php';
require __DIR__.'/dashboard.php';

Route::fallback(Error\FallbackController::class);
