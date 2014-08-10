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
 * Throw when the cart is in an invalid state (empty) for a given message.
 *
 * @since   1.0
 */
class EmptyCartException extends \LogicException
{
    // noop
}
