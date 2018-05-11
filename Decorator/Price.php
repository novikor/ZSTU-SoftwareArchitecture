<?php
/**
 * Created by PhpStorm.
 * User: novikor
 * Date: 11.05.18
 * Time: 18:16
 */

class Price implements PriceInterface
{
    /**
     * @var float
     */
    private $price;

    public function __construct(float $price)
    {
        $this->price = $price;
    }

    public function renderPrice():string
    {
        return number_format($this->price, 2) . '$';
    }

}