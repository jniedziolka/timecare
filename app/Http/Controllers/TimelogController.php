<?php

namespace App\Http\Controllers;

use App\Actions\FinishLastTask;
use App\Http\Requests\StoreTimelogRequest;
use App\Models\Task;
use App\Models\Timelog;

class TimelogController extends Controller
{
    public function store(StoreTimelogRequest $request, FinishLastTask $finishLastTask)
    {
        $validated = $request->validated();
        $finishLastTask();

        $task = Task::find($validated['task_id']);
        $timeLog = new Timelog([
            'date' => date('Y-m-d'),
            'start_time' => date('H:i:s')
        ]);

        $timeLog->task()->associate($task);
        return $timeLog->save();
    }
}
