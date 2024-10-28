<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Services\Landing\MemberService;

class MemberController extends Controller
{
    /**
     * @var MemberService
     */
    private $service;

    /**
     * Create a new controller instance.
     */
    public function __construct(MemberService $service)
    {
        $this->service = $service;
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        try {
            return inertia('Landing/Member/Home', $this->service->invoke());
        } catch (\Throwable $th) {
            return $this->redirectError($th);
        }
    }
}
