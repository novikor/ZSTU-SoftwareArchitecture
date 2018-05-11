<?php

/**
 * Created by PhpStorm.
 * User: novikor
 * Date: 11.05.18
 * Time: 16:56
 */
interface AdapterInterface
{
    public function loadData(string $sourceFile): array ;
}