<?php
/**
 * Created by PhpStorm.
 * User: mr8
 * Date: 18/07/18
 * Time: 14:41
 */

namespace TDD\MoneyExample;


class Money
{
    protected $amount;

    public function equals(Money $object)
    {
        $money = $object;
        return $this->amount == $money->amount;
    }
}