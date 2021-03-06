<?php

declare(strict_types=1);

namespace Intriro\Clock;

use DateTimeImmutable;
use DateTimeZone;

class FixedClock implements Clock
{
    protected DateTimeImmutable $fixedDateTime;

    public function __construct(DateTimeImmutable $dateTime)
    {
        $this->fixedDateTime = $dateTime;
    }

    public static function fromNow(DateTimeZone $timezone = null): self
    {
        return new self(new DateTimeImmutable('now', $timezone));
    }

    public static function fromDateTimeString(string $format, DateTimeZone $timezone = null): self
    {
        return new self(new DateTimeImmutable($format, $timezone));
    }

    public function now(): DateTimeImmutable
    {
        return $this->fixedDateTime;
    }
}
