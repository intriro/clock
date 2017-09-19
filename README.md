Clock
=============

A simple clock abstraction library for PHP.

# Motivation
The problem with DateTime instances is that they are not testable and mockable. They always rely on the system date and
time. Therefore you should never directly create DateTime instances.

With the Clock interface you are able to switch implementations and therefore have control over the returned
DateTime instances.


# Installation

Install it using Composer.
```
composer require intriro/clock
```

# Implementation

The `Clock` object provides access to the current date and time. Basically it is just a object which returns a
DateTimeImmutable instance that represents the current date and time.

With a Clock object you can always swap implementations and get DateTimeImmutable instances which don't rely on the system time.

The library ships with a `Clock` interface and three implementations.

`SystemClock` gives you access to the system date and time. It just returns `new DateTimeImmutable('now')` and it's the default implementation.

`ShiftedSystemClock` returns the system date and time that is shifted for a provided interval.

`FixedClock` returns a predefined fixed date and time.

# Example

```php

class Event
{
    /**
     * @var DateTimeImmutable
     */
    private $date;

    public function hasPassed(Clock $clock): bool
    {
        if ($this->clock->getCurrentDateTime() > $this->date) {
            return true;
        }
        
        return false;
    }
}
```
