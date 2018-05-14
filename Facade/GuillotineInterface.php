<?php
/**
 * Created by PhpStorm.
 * User: novikor
 * Date: 14.05.18
 * Time: 12:37
 */
interface GuillotineInterface
{
    public function raiseBlade();

    public function putVictimsHead(string $victim);

    public function pullBlade();
}