<?php

use Carbon\Carbon;
use App\Models\Employee;
use Illuminate\Support\Facades\Route;
use App\Bookings\ScheduleAvailability;
use App\Models\Service;


Route::get('/', function () {

    $employee = Employee::findOrFail(4);
    $service = Service::findOrFail(1);

    $avaibility = (new ScheduleAvailability($employee, $service))->forPeriod(

        now()->startOfDay(),
        now()->addMonth()->endOfDay(),

    );

    return view('welcome');
});