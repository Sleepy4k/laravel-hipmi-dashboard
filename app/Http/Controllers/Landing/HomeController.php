<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Services\Landing\HomeService;

class HomeController extends Controller
{
    /**
     * @var HomeService
     */
    private $service;

    /**
     * Create a new controller instance.
     */
    public function __construct(HomeService $service)
    {
        $this->service = $service;
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        try {
            return inertia('Landing/Home/Home', $this->service->invoke());
        } catch (\Throwable $th) {
            return $this->redirectError($th);
        }
    }
}
