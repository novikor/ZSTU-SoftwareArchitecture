<?php
/**
 * Created by PhpStorm.
 * User: novikor
 * Date: 11.05.18
 * Time: 18:17
 */

abstract class PriceDecorator implements PriceInterface
{
    /**
     * @var \PriceInterface
     */
    protected $price;

    public function __construct(PriceInterface $price)
    {
        $this->price = $price;
    }

    protected function getAmount(): float
    {
        return (float)trim($this->price->renderPrice(), '$');
    }

}