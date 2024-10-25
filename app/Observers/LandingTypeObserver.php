<?php

namespace App\Observers;

use App\Models\LandingType;

class LandingTypeObserver
{
    /**
     * Handle the landingType "creating" event.
     */
    public function creating(LandingType $landingType): void
    {
        $landingType->uuid = \Illuminate\Support\Str::uuid();
    }
}
