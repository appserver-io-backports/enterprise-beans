<?php
/**
 * TechDivision\EnterpriseBeans\TimerInterface
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @category  Library
 * @package   TechDivision\EnterpriseBeans
 * @author    Johann Zelger <j.zelger@techdivision.com>
 * @copyright 2014 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/techdivision/TechDivision_EnterpriseBeans
 */

namespace TechDivision\EnterpriseBeans;

/**
 * The Timer interface contains information about a timer that was created through the Timer Service
 *
 * @category  Library
 * @package   TechDivision\EnterpriseBeans
 * @author    Johann Zelger <j.zelger@techdivision.com>
 * @copyright 2014 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/techdivision/TechDivision_EnterpriseBeans
 */
interface TimerInterface
{

    /**
     * The unique identifier for this timer.
     *
     * @return string
     */
    public function getId();

    /**
     * Cause the timer and all its associated expiration notifications to be canceled.
     *
     * @return void
     * @throws \TechDivision\EnterpriseBeans\EnterpriseBeansException If this method could not complete due to a system-level failure.
     **/
    public function cancel();

    /**
     * Creates and schedules a TimerTask for the next timeout of this timer.
     *
     * @param boolean $newTimer TRUE if this is a new timer being scheduled, and not a re-schedule due to a timeout
     *
     * @return void
     */
    public function scheduleTimeout($newTimer);

    /**
     * Returns the first expiry of this timer.
     *
     * @return \DateTime The first expiry of this timer
     */
    public function getInitialExpiration();

    /**
     * Returns the duration (in microseconds) between timeouts.
     *
     * @return integer The duration (in microseconds) between timeouts
     */
    public function getIntervalDuration();

    /**
     * Get the number of microseconds that will elapse before the next scheduled timer expiration.
     *
     * @return int Number of microseconds that will elapse before the next scheduled timer expiration.
     * @throws \TechDivision\EnterpriseBeans\NoSuchObjectLocalException If invoked on a timer that has expired or has been cancelled
     * @throws \TechDivision\EnterpriseBeans\NoMoreTimeoutsException Indicates that the timer has no future timeouts
     * @throws \TechDivision\EnterpriseBeans\EnterpriseBeansException If this method could not complete due to a system-level failure
     **/
    public function getTimeRemaining();

    /**
     * Get the point in time at which the next timer expiration is scheduled to occur.
     *
     * @return \DateTime Get the point in time at which the next timer expiration is scheduled to occur.
     * @throws \TechDivision\EnterpriseBeans\NoSuchObjectLocalException If invoked on a timer that has expired or has been cancelled
     * @throws \TechDivision\EnterpriseBeans\NoMoreTimeoutsException Indicates that the timer has no future timeouts
     * @throws \TechDivision\EnterpriseBeans\EnterpriseBeansException If this method could not complete due to a system-level failure
     **/
    public function getNextTimeout();

    /**
     * Get the information associated with the timer at the time of creation.
     *
     * @return \Serializable The Serializable object that was passed in at timer creation, or null if the
     *         info argument passed in at timer creation was null.
     * @throws \TechDivision\EnterpriseBeans\EnterpriseBeansException If this method could not complete due to a system-level failure.
     **/
    public function getInfo();

    /**
     * Get a serializable handle to the timer. This handle can be used at a later time to
     * re-obtain the timer reference.
     *
     * @return \TechDivision\EnterpriseBeans\TimerHandleInterface Handle of the Timer
     * @throws \TechDivision\EnterpriseBeans\EnterpriseBeansException If this method could not complete due to a system-level failure.
     **/
    public function getHandle();

    /**
     * Get the schedule expression corresponding to this timer.
     *
     * @return \TechDivision\EnterpriseBeans\ScheduleExpression
     * @throws \TechDivision\Lang\IllegalStateException If this method is invoked while the instance is in a state that does not allow access to this method
     * @throws \TechDivision\EnterpriseBeans\EnterpriseBeansException If this method could not complete due to a system-level failure.
     */
    public function getSchedule();

    /**
     * Query whether this timer is a calendar-based timer.
     *
     * @return boolean True if this timer is a calendar-based timer.
     * @throws \TechDivision\EnterpriseBeans\EnterpriseBeansException If this method could not complete due to a system-level failure.
     */
    public function isCalendarTimer();

    /**
     * Query whether this timer has persistent semantics.
     *
     * @return boolean True if this timer has persistent guarantees.
     * @throws \TechDivision\EnterpriseBeans\EnterpriseBeansException If this method could not complete due to a system-level failure.
     */
    public function isPersistent();
}
