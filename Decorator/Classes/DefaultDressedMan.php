<?php
/**
 * Created by PhpStorm.
 * User: sergii
 * Date: 25.02.18
 * Time: 14:32
 */

namespace App\Classes;


class DefaultDressedMan implements Man
{
    public function sayDress()
    {
        echo 'Man dressed in pants, shirt';
    }
}
