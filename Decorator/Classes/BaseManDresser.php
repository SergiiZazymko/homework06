<?php
/**
 * Created by PhpStorm.
 * User: sergii
 * Date: 25.02.18
 * Time: 14:37
 */

namespace App\Classes;


abstract class BaseManDresser implements Man
{
    protected $dressedMan;

    public function __construct(Man $dressedMan)
    {
        $this->dressedMan = $dressedMan;
    }

    public function sayDress()
    {
        $this->dressedMan->sayDress();
    }
}
