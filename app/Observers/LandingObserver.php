<?php

namespace App\Observers;

use App\Models\Landing;

class LandingObserver
{
    /**
     * Handle the landing "creating" event.
     */
    public function creating(Landing $landing): void
    {
        $landing->uuid = \Illuminate\Support\Str::uuid();
    }
}
