<?php
/**
 * Created by PhpStorm.
 * User: sergii
 * Date: 23.02.18
 * Time: 11:49
 */

namespace App\Classes;


abstract class AbstractFactory
{
    protected $tshortColor;
    protected $shortsColor;
    protected $legginsColor;

    public function setTshortColor($color)
    {
        $this->tshortColor = $color;
    }

    public function setShortsColor($color)
    {
        $this->shortsColor = $color;
    }

    public function setLegginsColor($color)
    {
        $this->legginsColor = $color;
    }

    abstract public function createTShort(): TShort;
    abstract public function createShorts(): Shorts;
    abstract public function createLeggins(): Leggins;
}
