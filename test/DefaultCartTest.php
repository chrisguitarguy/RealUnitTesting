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

class DefaultCartTest
{
    use \Counterpart\Assert;

    // we will change this name
    public function testTotal()
    {
        $total = $cart->total();

        $this->assertEquals(
            0.0,
            $total,
            'Total should be zero for empty carts'
        );
    }
}
