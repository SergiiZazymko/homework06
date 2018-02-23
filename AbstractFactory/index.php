<?php
/**
 * Created by PhpStorm.
 * User: sergii
 * Date: 23.02.18
 * Time: 12:29
 */

include_once 'autoloader/autoload.php';

$dynamo = new \App\Classes\FootballClub('Dynamo', 'white', 'white', 'white');
$adidas = new \App\Classes\AdidasFactory();
$dynamo->signContract($adidas);
$dynamo->getUniform();
$dynamo->playFootball();

$shahtar = new \App\Classes\FootballClub('Shahtar', 'orange', 'black', 'orange/black');
$nike = new \App\Classes\NikeFactory();
$shahtar->signContract($nike);
$shahtar->getUniform();
$shahtar->playFootball();