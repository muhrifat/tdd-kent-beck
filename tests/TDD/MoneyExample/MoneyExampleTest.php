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
        $five = Money::dollar(5);
        $this->assertEquals(new Dollar(10), $five->times(2));
        $this->assertEquals(new Dollar(15), $five->times(3));
    }

    public function testFrancMultiplication()
    {
        $five = new Franc(5);
        $this->assertEquals(Money::franc(10), $five->times(2));
        $this->assertEquals(Money::franc(15), $five->times(3));
    }

    /*
     * Test Equal
     */
    public function testEquality()
    {
        $this->assertTrue((Money::dollar(5))->equals(Money::dollar(5)));
        $this->assertFalse((Money::dollar(5))->equals(Money::dollar(6)));

        $this->assertTrue((Money::franc(5))->equals(Money::franc(5)));
        $this->assertFalse((Money::franc(5))->equals(Money::franc(6)));

        $this->assertFalse((Money::franc(5))->equals(Money::dollar(5)));
    }
}