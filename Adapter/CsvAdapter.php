<?php
/**
 * Created by PhpStorm.
 * User: novikor
 * Date: 11.05.18
 * Time: 16:56
 */

class CsvAdapter implements AdapterInterface
{
    /**
     * @param string $sourceFile
     *
     * @return array
     */
    public function loadData(string $sourceFile): array
    {
        return fgetcsv(fopen($sourceFile, 'r'));
    }

}