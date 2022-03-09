<?php

namespace App\Actions;

use App\Models\Timelog;

class FinishLastTask
{
    public function __invoke()
    {
        Timelog::whereNull('end_time')->update(['end_time' => date('H:i:s')]);
    }
}
