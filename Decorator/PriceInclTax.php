<?php
/**
 * Created by PhpStorm.
 * User: novikor
 * Date: 11.05.18
 * Time: 18:17
 */

class PriceInclTax extends PriceDecorator
{
    const TAX_RATE = 0.21;

    public function renderPrice(): string
    {
        $amount = $this->getAmount();

        return number_format($amount + $amount * self::TAX_RATE, 2) . '$';
    }

}