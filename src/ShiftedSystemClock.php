<?php

namespace Intriro\Clock;

use DateInterval;
use DateTimeImmutable;

class ShiftedSystemClock extends SystemClock
{
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
    public function getCurrentDateTime(): DateTimeImmutable
    {
        return parent::getCurrentDateTime()->add($this->interval);
    }
}
