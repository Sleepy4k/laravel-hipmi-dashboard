<?php

namespace App\Repositories\Models;

use App\Models\LandingType;
use App\Repositories\EloquentRepository;
use App\Contracts\Models\LandingTypeInterface;

class LandingTypeRepository extends EloquentRepository implements LandingTypeInterface
{
    /**
     * Base respository constructor
     *
     * @param  Model  $model
     */
    public function __construct(LandingType $model)
    {
        $this->model = $model;
    }
}
