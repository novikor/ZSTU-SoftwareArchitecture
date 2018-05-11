<?php
/**
 * Created by PhpStorm.
 * User: novikor
 * Date: 11.05.18
 * Time: 16:58
 */

class FileReader
{
    /**
     * @var \AdapterInterface
     */
    protected $adapter;

    /**
     * FileReader constructor.
     *
     * @param \AdapterInterface $adapter
     */
    public function __construct(AdapterInterface $adapter)
    {
        $this->adapter = $adapter;
    }

    /**
     * @param string $sourceFile
     *
     * @return string
     */
    public function readFile(string $sourceFile)
    {
        return print_r($this->adapter->loadData($sourceFile), true);
    }
}