<?php
/**
 * Created by PhpStorm.
 * User: sergii
 * Date: 23.02.18
 * Time: 13:19
 */

namespace App\Classes;


class AdidasFactory extends AbstractFactory
{
    public function createTShort(): TShort
    {
        return new AdidasTShort($this->tshortColor);
    }

    public function createShorts(): Shorts
    {
        return new AdidasShorts($this->shortsColor);
    }

    public function createLeggins(): Leggins
    {
        return new AdidasLeggins($this->legginsColor);
    }
}
