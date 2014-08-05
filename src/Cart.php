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
 * Represents a shopping cart. Waaay simplistic
 *
 * @since   1.0
 */
interface Cart
{
    /**
     * Allows the addition of new products to the cart.
     *
     * @since   1.0
     * @param   Product $product
     * @return  void
     */
    public function addProduct(Product $prod);

    /**
     * Get the total $$ amount in the cart.
     *
     * @since   1.0
     * @return  float
     */
    public function total();
}
