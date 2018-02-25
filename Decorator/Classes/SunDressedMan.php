<?php
/**
 * Created by PhpStorm.
 * User: sergii
 * Date: 25.02.18
 * Time: 15:20
 */

namespace App\Classes;


class SunDressedMan extends BaseManDresser
{
    public function sayDress()
    {
        parent::sayDress();
        $this->saySunAddons();
    }

    public function saySunAddons()
    {
        echo ' and sunglasses';
    }
}
