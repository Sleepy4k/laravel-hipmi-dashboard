<?php

namespace App\Http\Controllers\Landing\Admin;

use App\Models\Activity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Landing\Admin\ActivityService;

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
        $this->authorize('viewAny', Activity::class);

        try {
            session()->put('activity.url', request()->fullUrl());

            return inertia('Landing/Admin/Activity/Home', $this->service->index());
        } catch (\Throwable $th) {
            return $this->redirectError($th);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', Activity::class);

        try {
            return inertia('Landing/Admin/Activity/Create', $this->service->create());
        } catch (\Throwable $th) {
            return $this->redirectError($th);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->authorize('store', Activity::class);

        try {
            $this->service->store($request->validated());

            return session()->has('activity.url')
                ? redirect(session()->get('activity.url'))
                : to_route('activity.index');
        } catch (\Throwable $th) {
            return $this->redirectError($th);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Activity $activity)
    {
        $this->authorize('view', $activity);

        try {
            return inertia('Landing/Admin/Activity/Show', $this->service->show($activity->id));
        } catch (\Throwable $th) {
            return $this->redirectError($th);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Activity $activity)
    {
        $this->authorize('edit', $activity);

        try {
            return inertia('Landing/Admin/Activity/Edit', $this->service->edit($activity->id));
        } catch (\Throwable $th) {
            return $this->redirectError($th);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Activity $activity)
    {
        $this->authorize('update', $activity);

        try {
            $this->service->update($request->validated(), $activity->id);

            return session()->has('activity.url')
                ? redirect(session()->get('activity.url'))
                : to_route('activity.index');
        } catch (\Throwable $th) {
            return $this->redirectError($th);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Activity $activity)
    {
        $this->authorize('delete', $activity);

        try {
            $this->service->destroy($activity->id);

            return session()->has('activity.url')
                ? redirect(session()->get('activity.url'))
                : to_route('application.index');
        } catch (\Throwable $th) {
            return $this->redirectError($th);
        }
    }
}
