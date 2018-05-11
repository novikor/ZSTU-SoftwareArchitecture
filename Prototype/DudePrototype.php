<?php
/**
 * Created by PhpStorm.
 * User: novikor
 * Date: 11.05.18
 * Time: 19:45
 */

abstract class DudePrototype
{
    protected $name;

    abstract public function __clone();

    public function __construct($name)
    {
        $this->name = $name;
        echo "Creating new $name... we need at least 18 years for that" . PHP_EOL;
    }
}