<?php
/**
 * Created by PhpStorm.
 * User: sergii
 * Date: 23.02.18
 * Time: 13:23
 */

namespace App\Classes;


class NikeFactory extends AbstractFactory
{
    public function createTShort(): TShort
    {
        return new NikeTShort($this->tshortColor);
    }

    public function createShorts(): Shorts
    {
        return new NikeShorts($this->shortsColor);
    }

    public function createLeggins(): Leggins
    {
        return new NikeLeggins($this->legginsColor);
    }
}
