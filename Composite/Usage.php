<?php
/**
 * Created by PhpStorm.
 * User: novikor
 * Date: 11.05.18
 * Time: 16:10
 */

require 'ProductInterface.php';
require 'Product.php';
require 'ProductCollection.php';

$collection = new ProductCollection();
$collection->addProduct(new Product());
$collection->addProduct(new Product());
$collection->addProduct(new Product());

$subCollection = new ProductCollection();
$subCollection->addProduct(new Product());

$subCollection
    ->setName('SubCollectionProduct')
    ->setPrice(666.66613);

$collection
    ->setName('UpperLevelCollectionProduct')
    ->setPrice(99.99)
    ->addProduct($subCollection);

echo $collection->getData();

