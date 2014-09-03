# Version 0.1.2

## Bugfixes

* Bugfix for invalid serialize/unserialize methods in ScheduleExpression
* Add missing exeptions to TimerInterface doc block

## Features

* Add NoMoreTimeoutsException that indicates that a calendar-based timer will not result in any more timeouts

# Version 0.1.1

## Bugfixes

* None

## Features

* Add NoSuchObjectLocalException that'll be thrown if a timer is not longer available
* Switch from array to TechDivision\Storage\StorageInterface for TimerServiceInterface::getTimers() and TimerServiceInterface::getAllTimers() methods

# Version 0.1.0

## Bugfixes

* None

## Features

* Initial Release