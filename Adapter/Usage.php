<?php
/**
 * Created by PhpStorm.
 * User: novikor
 * Date: 11.05.18
 * Time: 16:57
 */
require_once 'AdapterInterface.php';
require_once 'FileReader.php';
require_once 'CsvAdapter.php';
require_once 'JsonAdapter.php';

$csvReader = new FileReader(new CsvAdapter());
echo $csvReader->readFile('data/data.csv');

$jsonReader = new FileReader(new JsonAdapter());
echo $jsonReader->readFile('data/data.json');