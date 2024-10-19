<?php

namespace App\Traits;

use App\Support\GatherLandingData;

trait HandleLanding
{
    private function getLandingData(): array
    {
        if (!GatherLandingData::isRouteOnLanding()) return [];

        return [
            'logged_in' => GatherLandingData::isUserAuthenticated(),
            'navbar' => GatherLandingData::getPageData('navbar'),
            'footer' => GatherLandingData::getPageData('footer')
        ];
    }
}
