<?php
/**
 * Created by PhpStorm.
 * User: mr8
 * Date: 18/07/18
 * Time: 14:41
 */

namespace TDD\MoneyExample;


abstract class Money
{
    protected $amount;

    public function equals(Money $object)
    {
        $money = $object;
        return $this->amount == $money->amount && get_class($this) == get_class($money);
    }

    abstract function times(int $multiplier) : Money;

    static function dollar(int $amount) : Money
    {
        return new Dollar($amount);
    }

    static function franc(int $amount) : Money
    {
        return new Franc($amount);
    }
}