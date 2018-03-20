<?php

declare(strict_types=1);

namespace Intriro\Clock;

use DateTimeImmutable;

interface Clock
{
    public function now(): DateTimeImmutable;

    /**
     * @deprecated since version version 1.1, use now() instead.
     */
    public function getCurrentDateTime(): DateTimeImmutable;
}
