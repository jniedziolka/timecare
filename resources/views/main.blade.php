<x-layout>
    <x-slot:header>
        <x-parts.header />
    </x-slot:header>
    <div class="container-fluid">
        <div class="row">
            <x-active-timelog class="col" :timeLog="$activeTimeLog" :tasks="$tasks"/>
            <x-todays-work class="col" :timeLogs="$todayTimeLogs"/>
        </div>
    </div>
</x-layout>
