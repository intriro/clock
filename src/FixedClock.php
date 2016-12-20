<?php

namespace Intriro\Clock;

class FixedClock implements Clock
{
    /**
     * @var \DateTimeImmutable
     */
    protected $fixedDateTime;

    /**
     * @param \DateTimeImmutable $dateTime
     */
    public function __construct(\DateTimeImmutable $dateTime)
    {
        $this->fixedDateTime = $dateTime;
    }

    /**
     * @return FixedClock
     */
    public static function fromNow(): self
    {
        return new self(new \DateTimeImmutable());
    }

    /**
     * @param string $format
     *
     * @return FixedClock
     */
    public static function fromDateTimeString(string $format): self
    {
        return new self(new \DateTimeImmutable($format));
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrentDateTime(): \DateTimeImmutable
    {
        return $this->fixedDateTime;
    }

    /**
     * @param \DateTimeImmutable $dateTime
     */
    public function setDateTime(\DateTimeImmutable $dateTime)
    {
        $this->fixedDateTime = $dateTime;
    }
}
