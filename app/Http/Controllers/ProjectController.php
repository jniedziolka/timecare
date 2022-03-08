<?php

namespace App\Http\Controllers;

use App\Actions\GenerateDefaultTasks;
use App\Http\Requests\StoreProjectRequest;
use App\Models\Project;

class ProjectController extends Controller
{
    public function store(StoreProjectRequest $request, GenerateDefaultTasks $generateDefaultTasks)
    {
        $validated = $request->validated();

        $project = Project::create([
            'name' => $validated['name']
        ]);

        $generateDefaultTasks($project);

        return $project;
    }
}
