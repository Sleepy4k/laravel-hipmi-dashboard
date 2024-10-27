<?php

namespace App\Providers;

use App\Traits\AppSetting;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    use AppSetting;

    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $appSettings = $this->getAppSettings();

        view()->share('app_name', !empty($appSettings['app_name']) ? $appSettings['app_name'] : config('app.name'));
        view()->share('app_logo', $appSettings['app_logo'] ?? '');
        view()->share('app_favicon', $appSettings['app_favicon'] ?? '');
        view()->share('app_author', $appSettings['app_meta_author'] ?? 'benjamin4k');
        view()->share('app_description', $appSettings['app_meta_description'] ?? '');
        view()->share('app_keyword', $appSettings['app_meta_keyword'] ?? '');
    }
}
