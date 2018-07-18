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
        $this->assertEquals(new Dollar(10), $five->times(2));
        $this->assertEquals(new Dollar(15), $five->times(3));
    }

    public function testFrancMultiplication()
    {
        $five = new Franc(5);
        $this->assertEquals(new Franc(10), $five->times(2));
        $this->assertEquals(new Franc(15), $five->times(3));
    }

    /*
     * Test Equal
     */
    public function testEquality()
    {
        $this->assertTrue((new Dollar(5))->equals(new Dollar(5)));
        $this->assertFalse((new Dollar(5))->equals(new Dollar(6)));

        $this->assertTrue((new Franc(5))->equals(new Franc(5)));
        $this->assertFalse((new Franc(5))->equals(new Franc(6)));

        $this->assertFalse((new Franc(5))->equals(new Dollar(5)));
    }
}