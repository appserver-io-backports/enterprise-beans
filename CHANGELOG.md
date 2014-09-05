# Version 0.1.2

## Bugfixes

* None

## Features

* Add MethodInterface and TimedObjectInvokerInterface
* Refactor TimerInterface and TimerServiceInterface

# Version 0.1.1

## Bugfixes

* Bugfix for invalid serialize/unserialize methods in ScheduleExpression
* Add missing exeptions to TimerInterface doc block

## Features

* Add NoSuchObjectLocalException that'll be thrown if a timer is not longer available
* Switch from array to TechDivision\Storage\StorageInterface for TimerServiceInterface::getTimers() and TimerServiceInterface::getAllTimers() methods
* Add NoMoreTimeoutsException that indicates that a calendar-based timer will not result in any more timeouts
* Add bootstrap.php + phpunit.xml
* Refactor travis.yml for compatiblity with appserver-io/build process

# Version 0.1.0

## Bugfixes

* None

## Features

* Initial Release