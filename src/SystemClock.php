<?php

namespace Intriro\Clock;

class SystemClock implements Clock
{
    /**
     * {@inheritdoc}
     */
    public function getCurrentDateTime()
    {
        return new \DateTimeImmutable('now');
    }
}
