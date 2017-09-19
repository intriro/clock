<?php

namespace Intriro\Clock;

use DateTimeImmutable;

interface Clock
{
    /**
     * @return DateTimeImmutable
     */
    public function getCurrentDateTime(): DateTimeImmutable;
}
