<?php
/**
 * Created by PhpStorm.
 * User: novikor
 * Date: 14.05.18
 * Time: 12:21
 */

class CsvReaderAdapter implements JsonReaderInterface
{
    /**
     * @var \CsvReaderInterface
     */
    private $csvReader;

    /**
     * CsvReaderAdapter constructor.
     *
     * @param \CsvReaderInterface $csvReader
     */
    public function __construct(CsvReaderInterface $csvReader)
    {
        $this->csvReader = $csvReader;
    }

    /**
     * @param string $fileName
     *
     * @return array
     */
    public function loadData(string $fileName): array
    {
        $sourceFile = fopen($fileName, 'r');

        return $this->csvReader->readFile($sourceFile);
    }

}