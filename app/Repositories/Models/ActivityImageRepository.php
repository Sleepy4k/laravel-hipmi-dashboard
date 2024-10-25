<?php

namespace App\Repositories\Models;

use App\Models\ActivityImage;
use App\Repositories\EloquentRepository;
use App\Contracts\Models\ActivityImageInterface;

class ActivityImageRepository extends EloquentRepository implements ActivityImageInterface
{
    /**
     * Base respository constructor
     *
     * @param  Model  $model
     */
    public function __construct(ActivityImage $model)
    {
        $this->model = $model;
    }
}
