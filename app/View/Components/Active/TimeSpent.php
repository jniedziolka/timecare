<?php

namespace App\View\Components\Active;

use Carbon\Carbon;
use Carbon\CarbonInterval;
use Illuminate\View\Component;

class TimeSpent extends Component
{
    public function __construct(
        public string $startTime,
    )
    {
    }

    public function render()
    {
        return view('components.active.time-spent');
    }

    public function calculateSpentTime(): CarbonInterval
    {
        $spentTime = Carbon::now()->diff($this->startTime)->format('%H:%i:%S');
        return CarbonInterval::createFromFormat('H:i:s', $spentTime);
    }
}
