<?php
/**
 * Created by PhpStorm.
 * User: mr8
 * Date: 18/07/18
 * Time: 13:49
 */

namespace TDD\MoneyExample;


class Dollar
{
    private $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier)
    {
        return new Dollar($this->amount * $multiplier);
    }

    public function equals(Dollar $object)
    {
        $dollar = $object;
        return $this->amount == $dollar->amount;
    }
}