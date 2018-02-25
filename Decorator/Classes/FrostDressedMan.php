<?php
/**
 * Created by PhpStorm.
 * User: sergii
 * Date: 25.02.18
 * Time: 14:54
 */

namespace App\Classes;


class FrostDressedMan extends BaseManDresser
{
    public function sayDress()
    {
        parent::sayDress();
        $this->sayFrostAddons();
    }

    public function sayFrostAddons()
    {
        echo ', coat, ear-flap, felt boots';
    }
}
