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

    protected $currency;

    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function equals(Money $object)
    {
        $money = $object;
        return $this->amount == $money->amount && self::currency() == $money->currency();
    }

//    abstract function times(int $multiplier) : Money;
    public function times(int $multiplier)
    {
        return new Money($this->amount*$multiplier, $this->currency);
    }

    static function dollar(int $amount) : Money
    {
        return new Money($amount, "USD");
    }

    static function franc(int $amount) : Money
    {
        return new Money($amount, "CHF");
    }

    public function currency() : string
    {
        return $this->currency;
    }
}