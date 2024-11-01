<?php

namespace App\Services\Landing\Admin;

use App\Services\Service;
use App\DataTables\Landing\ActivityDataTable;
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
        $dataTable = new ActivityDataTable($this->activityInterface);
        $data = PreviewActivityResource::collection($dataTable->getData());
        $queryParams = request()->query() ?: null;

        return compact('data', 'queryParams');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return array
     */
    public function create(): array
    {
        $backUrl = session()->get('activity.url') ?? route('activity.index');

        return compact('backUrl');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param array $request
     *
     * @return void
     */
    public function store(array $request): void
    {
        //
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
        $data = $this->activityInterface->findById($id, ['id', 'slug', 'title', 'content', 'created_at'], ['images:activity_id,url']);
        $backUrl = session()->get('activity.url') ?? route('activity.index');

        return compact('data', 'backUrl');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return array
     */
    public function edit(int $id): array
    {
        return [];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param array $request
     * @param int $id
     *
     * @return void
     */
    public function update(array $request, int $id): void
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return void
     */
    public function destroy(int $id): void
    {
        //
    }
}
