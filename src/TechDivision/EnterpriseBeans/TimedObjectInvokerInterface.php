<?php
/**
 * TechDivision\EnterpriseBeans\TimedObjectInvokerInterface
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
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2014 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/techdivision/TechDivision_EnterpriseBeans
 */

namespace TechDivision\EnterpriseBeans;

/**
 * Interface for timed object invokers.
 *
 * @category  Library
 * @package   TechDivision\EnterpriseBeans
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2014 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/techdivision/TechDivision_EnterpriseBeans
 */
interface TimedObjectInvokerInterface
{

    /**
     * Responsible for invoking the timeout method on the target object.
     *
     * The timerservice implementation invokes this method as a callback when a timeout occurs for the
     * passed timer. The timerservice implementation will be responsible for passing the correct
     * timeout method corresponding to the <code>timer</code> on which the timeout has occurred.
     *
     * @param \TechDivision\EnterpriseBean\TimerInterface  $timer          The timer that is passed to timeout
     * @param \TechDivision\EnterpriseBean\MethodInterface $timeoutMethod  The timeout method
     */
    public function callTimeout(TimerInterface $timer, MethodInterface $timeoutMethod = null);
}
