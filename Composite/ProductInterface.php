<?php

/**
 * Created by PhpStorm.
 * User: novikor
 * Date: 11.05.18
 * Time: 16:12
 */
interface ProductInterface
{
    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName(string $name);

    /**
     * @param float $price
     *
     * @return $this
     */
    public function setPrice(float $price);

    /**
     * @return string
     */
    public function getData(): string;
}