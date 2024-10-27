<?php

namespace App\Http\Middleware;

use Inertia\Middleware;
use App\Traits\AppSetting;
use Illuminate\Http\Request;
use App\Traits\DashboardMenu;
use App\Traits\PageTranslate;
use App\Traits\HandleLanding;
use App\Http\Resources\User\AuthInertiaResource;

class HandleInertiaRequests extends Middleware
{
    use AppSetting, PageTranslate, DashboardMenu, HandleLanding;

    /**
     * The root template that is loaded on the first page visit.
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determine the current asset version.
     */
    public function version(Request $request): string|null
    {
        return parent::version($request);
    }

    /**
     * Handle authenticated user data, also manipulate it
     *
     * @param mixed $user
     *
     * @return mixed
     */
    private function handleUserData(mixed $user = null): mixed
    {
        if (!$user || $user == null) return null;

        $userData = $user->loadMissing('roles.permissions');

        return new AuthInertiaResource($userData);
    }

    /**
     * Define the props that are shared by default.
     *
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
        $appSettings = $this->getAppSettings();

        return [
            ...parent::share($request),
            'app' => [
                'debug' => config('app.debug'),
                'name' => $appSettings['app_name'] ?? '',
                'logo' => $appSettings['app_logo'] ?? '',
                'favicon' => $appSettings['app_favicon'] ?? '',
                'description' => $appSettings['app_meta_description'] ?? '',
            ],
            'auth' => [
                'user' => $this->handleUserData($request->user()),
            ],
            'flash' => [
                'success' => $request->session()->get('success'),
                'error' => $request->session()->get('error'),
            ],
            'menus' => $this->getMenus($request),
            'landing' => $this->getLandingData(),
            'translations' => $this->getTranslations(),
        ];
    }
}
