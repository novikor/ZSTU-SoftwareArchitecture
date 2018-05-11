<?php
/**
 * Created by PhpStorm.
 * User: novikor
 * Date: 11.05.18
 * Time: 19:11
 */

class Hacker
{
    /**
     * @return string
     */
    public function getSecretData()
    {
        return $this->hackPentagon();
    }

    /**
     * @return string
     */
    private function hackPentagon()
    {
        sleep(5);

        return 'Some secrets';
    }
}