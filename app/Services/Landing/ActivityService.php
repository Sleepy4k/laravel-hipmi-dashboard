<?php

namespace App\Services\Landing;

use App\Services\Service;
use App\Http\Resources\Landing\Activity\DetailActivityResource;
use App\Http\Resources\Landing\Activity\LatestActivityResource;
use App\Http\Resources\Landing\Activity\PreviewActivityResource;

class ActivityService extends Service
{
    /**
     * Display a listing of the resource.
     *
     * @return array
     */
    public function index(): array
    {
        $activities = PreviewActivityResource::collection($this->activityInterface->paginate(6, ['id', 'slug', 'title', 'content', 'created_at'], ['images']));

        return compact('activities');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return array
     */
    public function show(int $id): array
    {
        $data = new DetailActivityResource($this->activityInterface->findById($id, ['*'], ['images']));
        $latest = LatestActivityResource::collection($this->activityInterface->all(['id', 'slug', 'title', 'created_at'], ['images'], [['id', '!=', $id]], 'created_at', true, [], 3));

        return compact('data', 'latest');
    }
}
