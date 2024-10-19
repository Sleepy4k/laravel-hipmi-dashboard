<?php

namespace App\Support;

use App\Http\Resources\Landing\GlobalPageResource;
use App\Models\Landing;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

class GatherLandingData
{
    public static function isRouteOnLanding(): bool
    {
        return !(Request::is('dashboard*') || Request::is('login*') || Request::is('register*') || Route::getCurrentRoute()->isFallback);
    }

    public static function isUserAuthenticated(): bool
    {
        return auth('web')->check();
    }

    public static function getPageData(string $page): mixed
    {
        $data = Landing::select(['id', 'key', 'value', 'type_id'])->whereRelation('type', 'name', '=', $page)->get();

        return GlobalPageResource::collection($data);
    }
}
