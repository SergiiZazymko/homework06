<?php
/**
 * Created by PhpStorm.
 * User: sergii
 * Date: 23.02.18
 * Time: 13:24
 */

namespace App\Classes;


class FootballClub
{
    private $name;
    private $contractFactory;
    private $tshortColor;
    private $shortsColor;
    private $legginsColor;

    private $uniform = [
        'thort' => null,
        'shorts' => null,
        'leggins' => null,
    ];

    public function __construct($name, $tshortColor, $shortsColor, $legginsColor)
    {
        $this->name = $name;
        $this->tshortColor = $tshortColor;
        $this->shortsColor = $shortsColor;
        $this->legginsColor = $legginsColor;
    }

    public function signContract(AbstractFactory $factory)
    {
        $factory->setTshortColor($this->tshortColor);
        $factory->setShortsColor($this->shortsColor);
        $factory->setLegginsColor($this->legginsColor);

        $this->contractFactory = $factory;
    }

    public function getUniform()
    {
        $this->uniform['tshort'] = $this->contractFactory->createTshort();
        $this->uniform['shorts'] = $this->contractFactory->createShorts();
        $this->uniform['leggins'] = $this->contractFactory->createLeggins();
    }

    public function playFootball()
    {
        echo $this->name . ' plays football in ' . $this->uniform['tshort']->getParams() .
            $this->uniform['shorts']->getParams() . $this->uniform['leggins']->getParams() . PHP_EOL;
    }
}