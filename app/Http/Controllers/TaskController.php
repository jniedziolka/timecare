<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Models\Project;

class TaskController extends Controller
{
    public function store(StoreTaskRequest $request)
    {
        $validated = $request->validated();

        $project = Project::find($validated['project_id']);

        return $project->tasks()->create([
            'name' => $validated['name']
        ]);
    }
}
