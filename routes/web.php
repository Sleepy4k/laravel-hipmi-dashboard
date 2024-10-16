<?php

use App\Http\Controllers\Error;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return inertia('Landing/Home');
})->name('landing');

Route::prefix('about')->group(function () {
    Route::get('/', function () {
        return inertia('Landing/Home');
    })->name('about');

    Route::get('/pt', function () {
        return inertia('Landing/Home');
    })->name('about.pt');

    Route::get('/bpc', function () {
        return inertia('Landing/Home');
    })->name('about.bpc');
});

Route::get('/activity', function () {
    return inertia('Landing/Home');
})->name('activity');

Route::get('/article', function () {
    return inertia('Landing/Home');
})->name('article');

Route::get('/product', function () {
    return inertia('Landing/Home');
})->name('product');

Route::get('/member', function () {
    return inertia('Landing/Home');
})->name('member');

require __DIR__.'/auth.php';
require __DIR__.'/dashboard.php';

Route::fallback(Error\FallbackController::class);
