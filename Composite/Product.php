<?php

/**
 * Created by PhpStorm.
 * User: novikor
 * Date: 11.05.18
 * Time: 16:11
 */
class Product implements ProductInterface
{
    /** @var string */
    protected $name;

    /** @var float */
    protected $price;

    /**
     * @return string
     */
    public function getData(): string
    {
        return "{$this->getName()}: {$this->getPrice()}$";
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price)
    {
        $this->price = $price;
    }

}