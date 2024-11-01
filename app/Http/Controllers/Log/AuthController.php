<?php

namespace App\Http\Controllers\Log;

use App\Policies\Log\AuthPolicy;
use App\Services\Log\AuthService;
use App\Http\Controllers\Controller;
use Spatie\Activitylog\Models\Activity;

class AuthController extends Controller
{
    /**
     * @var AuthService
     */
    private $service;

    /**
     * Create a new controller instance.
     */
    public function __construct(AuthService $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('viewAny', AuthPolicy::class);

        try {
            session()->put('log.auth.url', request()->fullUrl());

            return inertia('Log/Auth/Home', $this->service->index());
        } catch (\Throwable $th) {
            return $this->redirectError($th);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Activity $auth)
    {
        $this->authorize('view', [AuthPolicy::class, $auth]);

        try {
            return inertia('Log/Auth/Show', $this->service->show($auth));
        } catch (\Throwable $th) {
            return $this->redirectError($th);
        }
    }
}
