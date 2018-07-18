<?php
/**
 * Created by PhpStorm.
 * User: mr8
 * Date: 18/07/18
 * Time: 13:49
 */

namespace TDD\MoneyExample;


class Dollar extends Money
{
    public function __construct(int $amount, string $currency)
    {
        parent::__construct($amount, $currency);
    }

    public function times(int $multiplier) : Money
    {
        return Money::dollar($this->amount * $multiplier);
    }

}