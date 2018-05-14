<?php
/**
 * Created by PhpStorm.
 * User: novikor
 * Date: 14.05.18
 * Time: 12:21
 */
interface JsonReaderInterface
{
    public function loadData(string $fileName):array;
}