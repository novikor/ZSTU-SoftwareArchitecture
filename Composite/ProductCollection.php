<?php

/**
 * Created by PhpStorm.
 * User: novikor
 * Date: 11.05.18
 * Time: 16:11
 */
class ProductCollection implements ProductInterface
{
    /** @var \ProductInterface[] */
    protected $_products;

    /**
     * @param \ProductInterface $product
     *
     * @return \ProductCollection
     */
    public function addProduct(ProductInterface $product)
    {
        $this->_products[] = $product;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this|\ProductInterface
     */
    public function setName(string $name)
    {
        array_walk($this->_products,
            function (ProductInterface $product) use ($name) {
                $product->setName($name);
            });

        return $this;
    }

    /**
     * @param float $price
     *
     * @return $this|\ProductInterface
     */
    public function setPrice(float $price)
    {
        array_walk($this->_products,
            function (ProductInterface $product) use ($price) {
                $product->setPrice($price);
            });

        return $this;
    }

    /**
     * @return string
     */
    public function getData(): string
    {
        return implode(PHP_EOL,
            array_map(function (ProductInterface $product) {
                return $product->getData();
            }, $this->_products));
    }

}