<?php

namespace App\Bookings;

use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Spatie\Period\Boundaries;
use Spatie\Period\Period;
use Spatie\Period\PeriodCollection;
use Spatie\Period\Precision;

class ScheduleAvailability
{
    protected PeriodCollection $periods;

    public function __construct()
    {
        $this->periods = new PeriodCollection();
    }

    public function forPeriod(Carbon $startAt, Carbon $endsAt)
    {


        // collect(CarbonPeriod::create($startAt, $endsAt)->days())->each(
        //     function ($date) {
        //         dump($date->format('l'));
        //     }
        // );
        // dd($this->periods);
    }
}