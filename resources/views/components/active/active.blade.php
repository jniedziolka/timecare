<div {{ $attributes->class(['mb-4']) }}>
    <h1>Active</h1>
    <form class="row">
        <div class="col">
            <label for="active_project" class="form-label">Project</label>
            <input type="text" class="form-control" id="active_project" value="{{ $timeLog->task->project->name }}" disabled>
        </div>
        <div class="col">
            <label for="active_task" class="form-label">Task</label>
            <input type="text" class="form-control" id="active_task" value="{{ $timeLog->task->name }}" disabled>
        </div>
    </form>
</div>
