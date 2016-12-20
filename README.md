Clock
=============

A simple clock abstraction library for PHP.

The `Clock` object provides access to the current date and time. Basically it is just a object which return a `DateTimeImmutable` instance with the current date and time.

The problem with DateTime instances is that they are not testable, because they always rely on the system date and time. With a Clock object you can always swap implementations and return DateTime instances which don't rely on the system time.

The library ships with a `Clock` interface and two implementations.

`SystemClock` which gives you the access to the system date and time. It just returns `new DateTimeImmutable('now')` and it's the default implementation.

`FixedClock` which always returns a predefined fixed date and time and is ment for testing purposes.

Example
-------------
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
