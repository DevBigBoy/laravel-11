<?php

use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $egyptTime = Carbon::now('Africa/Cairo');

    return view('welcome', compact('egyptTime'));
});