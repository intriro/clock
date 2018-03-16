<?php

namespace Intriro\Clock;

use DateTimeImmutable;

trait CurrentDateTimeTrait
{
    /**
     * {@inheritdoc}
     */
    public function getCurrentDateTime(): DateTimeImmutable
    {
        @trigger_error(sprintf('%s is deprecated since version 1.1. Use now() instead.', __METHOD__), E_USER_DEPRECATED);

        return $this->now();
    }
}
