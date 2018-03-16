<?php

declare(strict_types=1);

namespace Intriro\Clock;

use DateTimeImmutable;

class SystemClock implements Clock
{
    use CurrentDateTimeTrait;

    /**
     * {@inheritdoc}
     */
    public function now(): DateTimeImmutable
    {
        return new DateTimeImmutable('now');
    }
}
