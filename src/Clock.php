<?php

declare(strict_types=1);

namespace Intriro\Clock;

use DateTimeImmutable;

interface Clock
{
    public function now(): DateTimeImmutable;
}
