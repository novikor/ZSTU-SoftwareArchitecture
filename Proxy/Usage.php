<?php
/**
 * Created by PhpStorm.
 * User: novikor
 * Date: 11.05.18
 * Time: 19:11
 */

require_once 'Hacker.php';
require_once 'HackerProxy.php';

$hacker = new HackerProxy();
for ($i = 1; $i <= 5; $i++) {
    $timeBefore = microtime(true);
    $hacker->getSecretData();
    $timeAfter = microtime(true);
    $executionTime = number_format($timeAfter - $timeBefore, 10);
    echo "Trial #$i. Execution time: $executionTime" . PHP_EOL;
}