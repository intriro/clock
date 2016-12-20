<?php

namespace Intriro\Clock;

class SystemClock implements Clock
{
    /**
     * {@inheritdoc}
     */
    public function getCurrentDateTime(): \DateTimeImmutable
    {
        return new \DateTimeImmutable('now');
    }
}
