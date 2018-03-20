<?php

declare(strict_types=1);

namespace Intriro\Clock;

use DateTimeImmutable;
use DateTimeZone;

class SystemClock implements Clock
{
    use CurrentDateTimeTrait;

    /**
     * @var DateTimeZone
     */
    protected $timezone;

    public function __construct(DateTimeZone $timezone = null)
    {
        $this->timezone = $timezone ?: new DateTimeZone(date_default_timezone_get());
    }

    public function now(): DateTimeImmutable
    {
        return new DateTimeImmutable('now', $this->timezone);
    }
}
