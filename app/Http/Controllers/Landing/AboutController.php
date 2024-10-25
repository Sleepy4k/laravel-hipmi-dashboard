<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Services\Landing\AboutService;

class AboutController extends Controller
{
    /**
     * @var AboutService
     */
    private $service;

    /**
     * Create a new controller instance.
     */
    public function __construct(AboutService $service)
    {
        $this->service = $service;
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        try {
            return inertia('Landing/About/Home', $this->service->invoke());
        } catch (\Throwable $th) {
            return $this->redirectError($th);
        }
    }
}
