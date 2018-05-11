<?php
/**
 * Created by PhpStorm.
 * User: novikor
 * Date: 11.05.18
 * Time: 18:18
 */

require_once 'PriceInterface.php';
require_once 'Price.php';
require_once 'PriceDecorator.php';
require_once 'PriceInclTax.php';
require_once 'PriceInUah.php';

function render(PriceInterface $price)
{
    echo get_class($price) . ': ' . $price->renderPrice() . PHP_EOL;
}

$price = new Price(10.0);
render($price);

$priceInclTax = new PriceInclTax($price);
render($priceInclTax);

$priceInUah = new PriceInUah($price);
render($priceInUah);
