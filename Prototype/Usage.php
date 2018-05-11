<?php
/**
 * Created by PhpStorm.
 * User: novikor
 * Date: 11.05.18
 * Time: 19:57
 */
require_once 'DudePrototype.php';
require_once 'ChineseDudePrototype.php';

$bruceLee = new ChineseDudePrototype('Bruce Lee');

for ($i = 1; $i < 10; $i++) {
    $anotherChineseDude = clone $bruceLee;
}