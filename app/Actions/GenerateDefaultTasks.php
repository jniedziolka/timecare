<?php

namespace App\Actions;

use App\Models\Project;

class GenerateDefaultTasks
{
    public function __invoke(Project $project)
    {
        $project->tasks()->createMany([
            ['name' => 'Break'],
            ['name' => 'Work'],
            ['name' => 'Meeting']
        ]);
    }
}
