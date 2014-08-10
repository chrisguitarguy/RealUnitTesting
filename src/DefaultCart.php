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

/**
 * The default implementation of the cart.
 *
 * @since   1.0
 */
class DefaultCart implements Cart
{
    const DEFAULT_CURRENCY = 'USD';

    private $products = array();

    /**
     * The currency in which the carts values are stored.
     *
     * @since   1.1
     */
    private $currency;

    public function __construct(Currency $currency=null)
    {
        $this->currency = $currency ?: new Currency(self::DEFAULT_CURRENCY);
    }

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
        $total = new Money(0, $this->currency);
        foreach ($this->products as $product) {
            $total = $total->add($product->cost());
        }

        return $total;
    }

    /**
     * {@inheritdoc}
     */
    public function pay(PaymentGateway $gateway)
    {
        if (!$this->product) {
            throw new EmptyCartException('Cannot pay for a cart with no items');
        }

        $gateway->charge($this->total());
    }
}
