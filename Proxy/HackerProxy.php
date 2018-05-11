<?php
/**
 * Created by PhpStorm.
 * User: novikor
 * Date: 11.05.18
 * Time: 19:11
 */

class HackerProxy extends Hacker
{
    protected $secretData;

    /**
     * @return string
     */
    public function getSecretData()
    {
        if (is_null($this->secretData)) {
            $this->secretData = parent::getSecretData();
        }

        return $this->secretData;
    }

}