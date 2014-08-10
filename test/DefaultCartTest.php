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

use SebastianBergmann\Money\Money;
use SebastianBergmann\Money\Currency;

class DefaultCartTest
{
    use \Counterpart\Assert;

    public function testEmptyCartHasZeroTotal()
    {
        $currency = new Currency('USD');
        $cart = new DefaultCart($currency);

        $total = $cart->total();

        $this->assertMoney($total);
        $this->assertTrue(
            (new Money(0, $currency))->equals($total),
            'Total should be zero for empty carts'
        );
    }

    public function testTotalShouldBeTheSumOfProductCostsInCart()
    {
        $currency = new Currency('USD');
        $cart = new DefaultCart($currency);
        $cart->addProduct(new StubProduct('one product', new Money(1050, $currency)));
        $cart->addProduct(new StubProduct('two product', new Money(1050, $currency)));

        $total = $cart->total();

        $this->assertMoney($total);
        $this->assertTrue(
            (new Money(2100, $currency))->equals($total),
            'Total should be zero for empty carts'
        );
    }

    public function testPayChargesTheTotalAmountInTheCart()
    {
        $gateway = new PaymentGatewaySpy();
        $currency = new Currency('USD');
        $cart = new DefaultCart($currency);
        $cart->addProduct(new StubProduct('one product', new Money(1000, $currency)));

        $cart->pay($gateway);

        $gateway->assertCharged(new Money(1000, $currency));
    }

    private function assertMoney($object)
    {
        $this->assertInstanceOf(
            'SebastianBergmann\\Money\\Money',
            $object
        );
    }
}
