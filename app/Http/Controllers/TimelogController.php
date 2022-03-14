<?php

namespace App\Http\Controllers;

use App\Actions\FinishLastTask;
use App\Http\Requests\StoreTimelogRequest;
use App\Models\Task;
use App\Models\Timelog;

class TimelogController extends Controller
{
    public function index()
    {
        $activeTimeLog = Timelog::whereNull('end_time')
            ->with(['task', 'task.project'])
            ->first();

        $todayTimeLogs = Timelog::where('date', date('Y-m-d'))
            ->whereNotNull('end_time')
            ->with('task', 'task.project')
            ->get();

        $tasks = Task::with('project')->get();

        return view('main', compact('activeTimeLog', 'todayTimeLogs', 'tasks'));
    }

    public function store(StoreTimelogRequest $request, FinishLastTask $finishLastTask)
    {
        $validated = $request->validated();
        $finishLastTask();

        $task = Task::find($validated['task_id']);
        $timeLog = new Timelog([
            'date' => date('Y-m-d'),
            'start_time' => date('H:i:s')
        ]);

        $timeLog->task()->associate($task)->save();

        return redirect(route('timelog.index'));
    }
}
