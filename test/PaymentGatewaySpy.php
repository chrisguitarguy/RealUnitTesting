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
 * A payment gateway "spy" object for testing.
 *
 * @since   1.0
 */
class PaymentGatewaySpy implements PaymentGateway
{
    use \Counterpart\Assert;

    private $amount = null;

    /**
     * {@inheritdoc}
     */
    public function charge($amount)
    {
        $this->amount = $amount;
    }

    public function assertCharged($amount)
    {
        $this->assertEquals($amount, $this->amount);
    }
}
