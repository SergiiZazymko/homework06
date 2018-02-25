<?php

include_once 'autoloader/autoload.php';

use \App\Classes\DefaultDressedMan;
use \App\Classes\RainDressedMan;
use \App\Classes\FrostDressedMan;
use \App\Classes\SunDressedMan;

$itIsRaining = true;
$temperature = -1;
$sunIsShining = true;

$man = new DefaultDressedMan();

if ($itIsRaining) {
    $man = new RainDressedMan($man);
} elseif ($temperature < 0) {
    $man = new FrostDressedMan($man);
}

if ($sunIsShining) {
    $man = new SunDressedMan($man);
}

$man->sayDress();
