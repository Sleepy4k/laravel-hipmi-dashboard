<?php

use App\Http\Controllers\Error;
use App\Http\Controllers\Landing;
use Illuminate\Support\Facades\Route;

Route::get('/', Landing\HomeController::class)->name('landing');
Route::get('/about', Landing\AboutController::class)->name('about');
Route::get('/member', Landing\MemberController::class)->name('member');

Route::resource('/activity', Landing\ActivityController::class)
    ->only('index', 'show')
    ->name('index', 'activity');

Route::get('/product', function () {
    return inertia('Landing/Home');
})->name('product');

require __DIR__.'/auth.php';
require __DIR__.'/dashboard.php';

Route::fallback(Error\FallbackController::class);
