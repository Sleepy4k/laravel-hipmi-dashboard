<?php

namespace App\Http\Controllers\Landing;

use App\Models\Activity;
use App\Http\Controllers\Controller;
use App\Services\Landing\ActivityService;

class ActivityController extends Controller
{
    /**
     * @var ActivityService
     */
    private $service;

    /**
     * Create a new controller instance.
     */
    public function __construct(ActivityService $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            return inertia('Landing/Activity/Home', $this->service->index());
        } catch (\Throwable $th) {
            return $this->redirectError($th);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Activity $activity)
    {
        try {
            return inertia('Landing/Activity/Show', $this->service->show($activity->id));
        } catch (\Throwable $th) {
            return $this->redirectError($th);
        }
    }
}
