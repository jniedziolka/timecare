<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTimelogRequest;
use App\Models\Timelog;

class TimelogController extends Controller
{
    public function store(StoreTimelogRequest $request)
    {
        $validated = $request->validated();
    }
}
