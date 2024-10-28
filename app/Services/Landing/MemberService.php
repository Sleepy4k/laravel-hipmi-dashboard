<?php

namespace App\Services\Landing;

use App\Services\Service;

class MemberService extends Service
{
    /**
     * Handle the incoming request.
     *
     * @return array
     */
    public function invoke(): array
    {
        $data = [];

        return compact('data');
    }
}
