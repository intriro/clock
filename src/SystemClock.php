<?php

namespace Intriro\Clock;

use DateTimeImmutable;

class SystemClock implements Clock
{
    /**
     * {@inheritdoc}
     */
    public function getCurrentDateTime(): DateTimeImmutable
    {
        return new DateTimeImmutable('now');
    }
}
