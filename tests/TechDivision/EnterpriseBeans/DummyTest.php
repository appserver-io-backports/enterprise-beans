<?php
/**
 * TechDivision\EnterpriseBeans\DummyTest
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @category  tests
 * @package   TechDivision\EnterpriseBeans
 * @author    Johann Zelger <j.zelger@techdivision.com>
 * @copyright 2014 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/techdivision/TechDivision_EnterpriseBeans
 */

namespace TechDivision\EnterpriseBeans;

/**
 * Class DummyTest
 *
 * @category  tests
 * @package   TechDivision\EnterpriseBeans
 * @author    Johann Zelger <j.zelger@techdivision.com>
 * @copyright 2014 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/techdivision/TechDivision_EnterpriseBeans
 */
class DummyTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Dummy test
     */
    public function testDummy()
    {
        $this->assertSame(1, 1);
    }
}
