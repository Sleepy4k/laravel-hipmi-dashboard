<?php

namespace App\Services\Landing;

use App\Models\Landing;
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
        // We call model on this, cuz its hard to code on repository pattern
        $about = GlobalPageResource::collection(Landing::select(['id', 'key', 'value', 'type_id'])
            ->whereRelation('type', function ($query) {
                $query->select(['id', 'name'])->where('name', '=', 'about');
            })->where(function ($query) {
                $query->where('key', 'kabinet')
                    ->orWhere('key', 'description');
            })
            ->get()
        );

        $activities = PreviewActivityResource::collection($this->activityInterface->all(['id', 'slug', 'title', 'content', 'created_at'], ['images:activity_id,url'], [], 'created_at', true, [], 3));
        $homeId = $this->landingTypeInterface->findByCustomId([['name', '=', 'home']], ['id']);
        $data = GlobalPageResource::collection($this->landingInterface->all(['id', 'key', 'value', 'type_id'], [], [['type_id', '=', $homeId->id]]));

        return compact('activities', 'data', 'about');
    }
}
