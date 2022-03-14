<div {{ $attributes }}>
    <x-active.active :time-log="$timeLog"/>
    <x-active.time-spent :start-time="$timeLog->start_time" />
    <x-active.new :tasks="$tasks"/>
    <x-active.general />
</div>
