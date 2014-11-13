<?php

/**
 * TechDivision\EnterpriseBeans\Annotations\PostConstruct
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

use TechDivision\Lang\Reflection\ReflectionAnnotation;

/**
 * Annotation implementation representing a @PostConstruct annotation on a bean method.
 *
 * @category   Library
 * @package    TechDivision_EnterpriseBeans
 * @subpackage Annotations
 * @author     Tim Wagner <t.wagner@techdivision.com>
 * @copyright  2014 TechDivision GmbH <info@techdivision.com>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       https://github.com/techdivision/TechDivision_EnterpriseBeans
 */
class PostConstruct extends ReflectionAnnotation
{

    /**
     * The annotation for a method that has to be invoked after the instance has been created.
     *
     * @var string
     */
    const ANNOTATION = 'PostConstruct';

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
