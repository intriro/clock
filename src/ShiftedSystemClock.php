<?php

declare(strict_types=1);

namespace Intriro\Clock;

use DateInterval;
use DateTimeImmutable;
use DateTimeZone;

class ShiftedSystemClock extends SystemClock
{
    protected DateInterval $interval;

    public function __construct(string $string, DateTimeZone $timezone = null)
    {
        parent::__construct($timezone);

        $this->interval = DateInterval::createFromDateString($string);
    }

    public function now(): DateTimeImmutable
    {
        return parent::now()->add($this->interval);
    }
}
