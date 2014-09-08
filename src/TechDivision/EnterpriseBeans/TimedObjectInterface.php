<?php
/**
 * TechDivision\EnterpriseBeans\TimedObjectInterface
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
 * The TimedObject interface contains the callback method that is used
 * to deliver timer expiration notifications. It is implemented by an
 * entity bean or stateless session bean or message-driven bean class.
 *
 * @category  Library
 * @package   TechDivision\EnterpriseBeans
 * @author    Johann Zelger <j.zelger@techdivision.com>
 * @copyright 2014 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/techdivision/TechDivision_EnterpriseBeans
 */
interface TimedObjectInterface
{

    /**
     * The name of the default timeout method.
     *
     * @var string
     */
    const DEFAULT_TIMEOUT_METHOD = 'timeout';

    /**
     * Invoked by the container upon timer expiration.
     *
     * @param \TechDivision\EnterpriseBeans\TimerInterface $timer Timer whose expiration caused this notification
     *
     * @return void
     **/
    public function timeout(TimerInterface $timer);
}
