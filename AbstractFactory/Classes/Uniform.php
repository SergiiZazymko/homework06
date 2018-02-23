<?php
/**
 * Created by PhpStorm.
 * User: sergii
 * Date: 23.02.18
 * Time: 14:02
 */

namespace App\Classes;


abstract class Uniform
{
    protected $type;
    protected $producer;
    protected $color;

    public function __construct($color)
    {
        $this->color = $color;
    }

    public function getParams()
    {
        return "{$this->color} {$this->type} {$this->producer} ";
    }
}