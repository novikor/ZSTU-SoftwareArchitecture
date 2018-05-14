<?php
/**
 * Created by PhpStorm.
 * User: novikor
 * Date: 14.05.18
 * Time: 12:45
 */
class Facade
{
    /**
     * @var \ExecutionerInterface
     */
    private $executioner;
    /**
     * @var \GuillotineInterface
     */
    private $guillotine;

    public function __construct(ExecutionerInterface $executioner, GuillotineInterface $guillotine)
    {
        $this->executioner = $executioner;
        $this->guillotine = $guillotine;
    }

    public function executeSomeone($victimName)
    {
        $this->executioner->goToGuillotine();
        $this->executioner->prepareGuillotine();
        $this->executioner->prepareVictim($victimName);
        $this->guillotine->raiseBlade();
        $this->guillotine->putVictimsHead($victimName);
        $this->guillotine->pullBlade();
        $this->executioner->cleanGuillotine();

        echo "Successfully executed $victimName!" . PHP_EOL;
    }
}