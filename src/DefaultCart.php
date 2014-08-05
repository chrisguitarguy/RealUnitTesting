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
 * The default implementation of the cart.
 *
 * @since   1.0
 */
class DefaultCart implements Cart
{
    private $products = array();

    /**
     * {@inheritdoc}
     */
    public function addProduct(Product $prod)
    {
        $this->products[] = $prod;
    }

    /**
     * {@inheritdoc}
     */
    public function total()
    {
        $total = 0.0;
        foreach ($this->products as $product) {
            $total += $product->amount();
        }

        return $total;
    }
}
