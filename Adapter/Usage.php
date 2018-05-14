<?php
/**
 * Created by PhpStorm.
 * User: novikor
 * Date: 11.05.18
 * Time: 16:57
 */
require_once 'JsonReaderInterface.php';
require_once 'CsvReaderInterface.php';
require_once 'CsvReaderAdapter.php';
require_once 'CsvReader.php';
require_once 'JsonReader.php';

$jsonReader = new JsonReader();
echo print_r($jsonReader->loadData('data/data.json'), true);

$csvReaderAdapter = new CsvReaderAdapter(new CsvReader());
echo print_r($csvReaderAdapter->loadData('data/data.csv'), true);