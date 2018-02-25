<?php
/**
 * Created by PhpStorm.
 * User: sergii
 * Date: 25.02.18
 * Time: 14:46
 */

namespace App\Classes;


class RainDressedMan extends BaseManDresser
{
    public function sayDress()
    {
        parent::sayDress();
        $this->sayRainAddons();
    }

    public function sayRainAddons()
    {
        echo ', slicker, hat, rubber boots';
    }
}
