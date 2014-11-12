<?php

/**
 * TechDivision\EnterpriseBeans\Annotations\AnnotationsAbstractBeanAnnotation
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
 * Abstract bean annotation implementation.
 *
 * @category   Library
 * @package    TechDivision_EnterpriseBeans
 * @subpackage Annotations
 * @author     Tim Wagner <t.wagner@techdivision.com>
 * @copyright  2014 TechDivision GmbH <info@techdivision.com>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       https://github.com/techdivision/TechDivision_EnterpriseBeans
 */
abstract class AbstractBeanAnnotation extends ReflectionAnnotation
{

    /**
     * Returns the value of the name attribute.
     *
     * @return string The annotations name attribute
     */
    public function getName()
    {
        return $this->values[AnnotationKeys::NAME];
    }

    /**
     * Returns the value of the mapped name attribute.
     *
     * @return string The annotations mapped name attribute
     */
    public function getMappedName()
    {
        return $this->values[AnnotationKeys::MAPPED_NAME];
    }

    /**
     * Returns the value of the description attribute.
     *
     * @return string The annotations description attribute
     */
    public function getDescription()
    {
        return $this->values[AnnotationKeys::DESCRIPTION];
    }
}
