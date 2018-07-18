<?php
/**
 * Created by PhpStorm.
 * User: mr8
 * Date: 18/07/18
 * Time: 13:50
 */

namespace TDD\MoneyExample;


class MoneyExampleTest extends \BaseTest
{
    /**
     * Tests that dollar's public variable, $amount, is the same as the given amount
     */
    public function testMultiplication()
    {
        $five = new Dollar(5);
        $product = $five->times(2);
        $this->assertEquals(10, $product->amount);
        $product = $five->times(3);
        $this->assertEquals(15, $product->amount);
    }
}