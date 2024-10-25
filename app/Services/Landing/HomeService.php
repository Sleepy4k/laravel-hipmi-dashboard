<?php

namespace App\Services\Landing;

use App\Services\Service;
use App\Http\Resources\Landing\GlobalPageResource;
use App\Http\Resources\Landing\Activity\PreviewActivityResource;

class HomeService extends Service
{
    /**
     * Handle the incoming request.
     *
     * @return array
     */
    public function invoke(): array
    {
        $activities = PreviewActivityResource::collection($this->activityInterface->all(['id', 'slug', 'title', 'content', 'created_at'], ['images'], [], 'created_at', true, [], 3));
        $homeId = $this->landingTypeInterface->findByCustomId([['name', '=', 'home']], ['id']);
        $data = GlobalPageResource::collection($this->landingInterface->all(['id', 'key', 'value', 'type_id'], ['type'], [['type_id', '=', $homeId->id]]));

        return compact('activities', 'data');
    }
}
