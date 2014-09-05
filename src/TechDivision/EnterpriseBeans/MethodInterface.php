<?php
/**
 * TechDivision\EnterpriseBeans\MethodInterface
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
 * A method interface.
 *
 * @category  Library
 * @package   TechDivision\EnterpriseBeans
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2014 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/techdivision/TechDivision_EnterpriseBeans
 */
interface MethodInterface extends \Serializable
{

    /**
     * Returns the class name to invoke the method on.
     *
     * @return string The class name
     */
    public function getClassName();

    /**
     * Returns the method name to invoke on the class.
     *
     * @return string The method name
     */
    public function getMethodName();

    /**
     * Returns the method parameters.
     *
     * @return array The method parameters
     */
    public function getParameters();
}
