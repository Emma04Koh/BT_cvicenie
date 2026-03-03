<?php

namespace App\Http\Controllers;

use App\Providers\TimeServiceProvider;
use Illuminate\Http\Request;

class TimeApiController extends Controller
{
    private TimeServiceProvider $timeService;

    public function __construct(TimeServiceProvider $timeService)
    {
        $this->timeService = $timeService;
    }
    public function getTime()
    {
        $time = $this->timeService->getTime();

        return response()->json([
            'current_time' => $time
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}