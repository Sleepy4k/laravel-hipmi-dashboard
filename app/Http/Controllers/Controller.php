<?php

namespace App\Http\Controllers;

use App\Traits\SystemLog;
use App\Enum\ReportLogType;
use Illuminate\Support\Facades\Gate;

abstract class Controller
{
    use SystemLog;

    /**
     * Handler try catch error.
     *
     * @param \Throwable $error
     *
     * @return \Illuminate\Http\Response
     */
    protected function redirectError(\Throwable $error)
    {
        $this->sendReportLog(ReportLogType::ERROR, $error->getMessage());

        return back()->withErrors([
            'error' => $error->getMessage()
        ])->withInput();
    }

    /**
     * Check if current user authorize on current method
     *
     * @param string $method
     * @param mixed $argument
     *
     * @return \Illuminate\Auth\Access\Response
     */
    protected function authorize(string $method, mixed $argument)
    {
        return Gate::authorize($method, $argument);
    }
}
