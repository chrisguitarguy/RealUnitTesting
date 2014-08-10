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
 * PaymentGateway implementations contain the actual logic for charging a user.
 *
 * @since   1.0
 */
interface PaymentGateway
{
    /**
     * Charge the payment method a given amount.
     *
     * @since   1.0
     * @param   float|Money $amount The amount to chart, might be a float or a
     *          Money value object.
     * @return  void
     */
    public function charge($amount);
}
