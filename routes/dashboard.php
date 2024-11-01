<?php

use App\Enum\DisplayModeType;
use App\Http\Controllers\Log;
use App\Http\Controllers\RBAC;
use App\Http\Controllers\Account;
use App\Http\Controllers\Translate;
use App\Http\Controllers\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Landing\Admin;
use App\Http\Controllers\DashboardController;

Route::prefix('dashboard')->middleware('auth')->group(function () {
    Route::get('/', DashboardController::class)->name('dashboard.index');

    Route::prefix('landing')->group(function () {
        Route::resource('/activity', Admin\ActivityController::class)
            ->names('activities');

        Route::resource('/landing', Admin\DataController::class)
            ->names('landing');

        Route::resource('/landing/type', Admin\TypeController::class)
            ->names('landing.type');
    });

    Route::prefix('application')->as('application.')->group(function () {
        Route::get('/{displayMode}', [Application\SettingController::class, 'index'])
            ->name('index')
            ->where('displayMode', DisplayModeType::toWhereCase());

        Route::resource('/settings', Application\SettingController::class)
            ->except('index')
            ->names(''); // Remove default route names

        Route::resource('/types', Application\SettingTypeController::class)
            ->names('type');
    });

    Route::prefix('account')->group(function () {
        Route::controller(Account\ProfileController::class)->prefix('profile')->group(function () {
            Route::get('/', 'edit')->name('profile.edit');
            Route::patch('/', 'update')->name('profile.update');
            Route::delete('/', 'destroy')->name('profile.destroy');
        });

        Route::resource('/user', Account\UserController::class)
            ->names('users');
    });

    Route::get('/menu', DashboardController::class)->name('menus.index');
    Route::get('/menu/meta', DashboardController::class)->name('menus.metas.index');

    Route::prefix('translate')->as('translate.')->group(function () {
        Route::get('/{displayMode}', [Translate\TranslateController::class, 'index'])
            ->name('index')
            ->where('displayMode', DisplayModeType::toWhereCase());

        Route::resource('/list', Translate\TranslateController::class)
            ->except('index')
            ->names(''); // Remove default route names

        Route::resource('/language', Translate\LanguageController::class)
            ->only('index', 'store')
            ->names('language');
    });

    Route::prefix('rbac')->as('rbac.')->group(function () {
        Route::get('/', RBAC\HomeController::class)->name('index');
        Route::resources([
            'roles' => RBAC\RoleController::class,
            'permissions' => RBAC\PermissionController::class,
        ]);
    });

    Route::prefix('log')->as('log.')->group(function () {
        Route::get('/', Log\HomeController::class)->name('index');
        Route::resources([
            'query' => Log\QueryController::class,
            'system' => Log\SystemController::class,
            'auth' => Log\AuthController::class,
            'model' => Log\ModelController::class,
        ], [
            'only' => ['index', 'show'],
            'where' => [
                'query' => '[0-9]{4}-[0-9]{2}-[0-9]{2}+',
                'system' => '[0-9]{4}-[0-9]{2}-[0-9]{2}+',
            ],
        ]);
    });
});
