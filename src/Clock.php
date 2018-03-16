<?php

namespace Intriro\Clock;

use DateTimeImmutable;

interface Clock
{
    /**
     * @return DateTimeImmutable
     */
    public function now(): DateTimeImmutable;

    /**
     * @deprecated since version version 1.1, use now() instead.
     *
     * @return DateTimeImmutable
     */
    public function getCurrentDateTime(): DateTimeImmutable;
}
