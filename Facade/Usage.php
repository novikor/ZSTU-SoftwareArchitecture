<?php
/**
 * Created by PhpStorm.
 * User: novikor
 * Date: 14.05.18
 * Time: 12:53
 */
require_once 'ExecutionerInterface.php';
require_once 'Executioner.php';
require_once 'GuillotineInterface.php';
require_once 'Guillotine.php';
require_once 'Facade.php';

$facade = new Facade(new Executioner(), new Guillotine());

$facade->executeSomeone('Really bad guy');