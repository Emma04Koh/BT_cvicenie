<?php

namespace App\Http\Controllers;

use App\Providers\TimeServiceProvider;

class TimeRpcController extends Controller
{
    private TimeServiceProvider $timeService;

    public function __construct(TimeServiceProvider $timeService)
    {
        $this->timeService = $timeService;
    }
    public function showTime()
    {
        $time = $this->timeService->getTime();

        return response("Aktuálny čas je: " . $time);
    }
}