<?php
/**
 * Created by PhpStorm.
 * User: novikor
 * Date: 11.05.18
 * Time: 18:18
 */

class PriceInUah extends PriceDecorator
{
    const EXCHANGE_RATE = 26.19;

    public function renderPrice(): string
    {
        return number_format($this->getAmount() * self::EXCHANGE_RATE, 2) . '₴';
    }

}