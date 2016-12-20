<?php

namespace Intriro\Clock;

interface Clock
{
    /**
     * @return \DateTimeImmutable
     */
    public function getCurrentDateTime(): \DateTimeImmutable;
}
