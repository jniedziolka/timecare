<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Models\Project;

class ProjectController extends Controller
{
    public function store(StoreProjectRequest $request)
    {
        $validated = $request->validated();

        return Project::create([
            'name' => $validated['name']
        ]);
    }
}
