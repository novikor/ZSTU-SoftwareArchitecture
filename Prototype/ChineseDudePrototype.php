<?php
/**
 * Created by PhpStorm.
 * User: novikor
 * Date: 11.05.18
 * Time: 19:51
 */

class ChineseDudePrototype extends DudePrototype
{
    public function __clone()
    {
        echo "Clonning {$this->name}.. much faster than grow new one" . PHP_EOL;
        $this->name.= ' Clone';
    }

}