<div {{ $attributes->class(['mb-4']) }}>
    <h1>New section</h1>
    <form method="POST" action="{{ route('timelog.store') }}">
        @csrf
        <div class="mb-3">
            <label for="active_project" class="form-label">New Task</label>
            <select class="form-select" id="active_project" name="task_id" required>
                @foreach($tasks as $task)
                    <option value="{{ $task->id }}"><b>{{ $task->project->name }}</b>: {{ $task->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Start New Task</button>
    </form>
</div>
