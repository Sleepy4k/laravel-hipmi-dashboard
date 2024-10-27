<?php

namespace App\Services\Landing;

use App\Services\Service;
use App\Http\Resources\Landing\GlobalPageResource;

class AboutService extends Service
{
    /**
     * Handle the incoming request.
     *
     * @return array
     */
    public function invoke(): array
    {
        $homeId = $this->landingTypeInterface->findByCustomId([['name', '=', 'about']], ['id']);
        $data = GlobalPageResource::collection($this->landingInterface->all(['id', 'key', 'value', 'type_id'], [], [['type_id', '=', $homeId->id]]));

        return compact('data');
    }
}
