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

    public function testEmptyCartHasZeroTotal()
    {
        $cart = new DefaultCart();

        $total = $cart->total();

        $this->assertMoney($total);
        $this->assertEquals(
            0.0,
            $total,
            'Total should be zero for empty carts'
        );
    }

    public function testTotalShouldBeTheSumOfProductCostsInCart()
    {
        $cart = new DefaultCart();
        $cart->addProduct(new StubProduct('one product', 10.50));
        $cart->addProduct(new StubProduct('two product', 10.50));

        $total = $cart->total();

        $this->assertMoney($total);
        $this->assertEquals(
            21.0,
            $total,
            'Total should be zero for empty carts'
        );
    }

    private function assertMoney($object)
    {
        $this->assertInstanceOf(
            'SebastianBergmann\\Money\\Currency',
            $object
        );
    }
}
