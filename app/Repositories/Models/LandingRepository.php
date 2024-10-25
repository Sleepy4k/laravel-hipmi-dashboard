<?php

namespace App\Repositories\Models;

use App\Models\Landing;
use App\Repositories\EloquentRepository;
use App\Contracts\Models\LandingInterface;

class LandingRepository extends EloquentRepository implements LandingInterface
{
    /**
     * Base respository constructor
     *
     * @param  Model  $model
     */
    public function __construct(Landing $model)
    {
        $this->model = $model;
    }
}
