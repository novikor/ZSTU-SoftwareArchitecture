<?php
/**
 * Created by PhpStorm.
 * User: novikor
 * Date: 14.05.18
 * Time: 12:36
 */
interface ExecutionerInterface
{
    public function goToGuillotine();

    public function prepareGuillotine();

    public function prepareVictim(string $victim);

    public function cleanGuillotine();
}