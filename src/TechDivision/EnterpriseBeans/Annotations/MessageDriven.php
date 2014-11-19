<?php

/**
 * TechDivision\EnterpriseBeans\Annotations\MessageDriven
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @category   Library
 * @package    TechDivision_EnterpriseBeans
 * @subpackage Annotations
 * @author     Tim Wagner <t.wagner@techdivision.com>
 * @copyright  2014 TechDivision GmbH <info@techdivision.com>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       https://github.com/techdivision/TechDivision_EnterpriseBeans
 */

namespace TechDivision\EnterpriseBeans\Annotations;

/**
 * Annotation implementation representing a @MessageDriven annotation on a bean.
 *
 * @category   Library
 * @package    TechDivision_EnterpriseBeans
 * @subpackage Annotations
 * @author     Tim Wagner <t.wagner@techdivision.com>
 * @copyright  2014 TechDivision GmbH <info@techdivision.com>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       https://github.com/techdivision/TechDivision_EnterpriseBeans
 */
class MessageDriven extends EnterpriseBean
{

    /**
     * The annotation for message bean.
     *
     * @var string
     */
    const ANNOTATION = 'MessageDriven';

    /**
     * This method returns the class name as
     * a string.
     *
     * @return string
     */
    public static function __getClass()
    {
        return __CLASS__;
    }
}
