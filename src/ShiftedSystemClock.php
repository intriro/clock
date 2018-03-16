<?php

namespace Intriro\Clock;

use DateInterval;
use DateTimeImmutable;

class ShiftedSystemClock extends SystemClock
{
    use CurrentDateTimeTrait;

    /**
     * @var DateInterval
     */
    private $interval;

    /**
     * @param string $string
     */
    public function __construct(string $string)
    {
        $this->interval = DateInterval::createFromDateString($string);
    }

    /**
     * {@inheritdoc}
     */
    public function now(): DateTimeImmutable
    {
        return parent::now()->add($this->interval);
    }
}
