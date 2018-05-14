<?php

/**
 * Created by PhpStorm.
 * User: novikor
 * Date: 11.05.18
 * Time: 16:56
 */
interface CsvReaderInterface
{
    /**
     * @param resource $sourceFile
     *
     * @return array
     */
    public function readFile($sourceFile): array ;
}