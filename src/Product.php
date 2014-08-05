<?php
/**
 * Real Unit Testing
 *
 * Code for a talk given at Northeast PHP 2014: http://www.northeastphp.org/
 *
 * @copyright   2014 Christopher Davis
 * @license     http://opensource.org/licenses/MIT MIT
 */

namespace Chrisguitarguy\RealUnitTesting;

/**
 * Represents a single product.
 *
 * @since   1.0
 */
interface Product
{
    /**
     * Get the name of the product.
     *
     * @since   1.0
     * @return  string
     */
    public function name();

    /**
     * Get the cost of the product.
     *
     * @since   1.0
     * @return  float
     */
    public function cost();
}
