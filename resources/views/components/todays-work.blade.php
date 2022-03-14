<div {{ $attributes }}>
    <h1>Today's work</h1>
    <ul class="list-group">
        @foreach($timeLogs as $timeLog)
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">{{ $timeLog->task->project->name }}</div>
                    {{ $timeLog->task->name }}
                </div>
                <span class="badge bg-primary rounded-pill">{{ $timeLog->start_time }} - {{ $timeLog->end_time }}</span>
            </li>
        @endforeach
    </ul>
</div>
