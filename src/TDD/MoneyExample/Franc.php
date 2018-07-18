<?php
/**
 * Created by PhpStorm.
 * User: mr8
 * Date: 18/07/18
 * Time: 14:37
 */

namespace TDD\MoneyExample;


class Franc extends Money
{
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier)
    {
        return new Franc($this->amount * $multiplier);
    }
}