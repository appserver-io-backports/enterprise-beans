<?php 

/**
 * TechDivision\EnterpriseBeans\DummyTest
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 */

namespace TechDivision\EnterpriseBeans;

/**
 * @package     TechDivision\PersistenceContainer
 * @copyright  	Copyright (c) 2013<info@techdivision.com> - TechDivision GmbH
 * @license    	http://opensource.org/licenses/osl-3.0.php
 *              Open Software License (OSL 3.0)
 * @author      Tim Wagner <tw@techdivision.com>
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