<?php

namespace App\Behavioral\Observer;

class Apple implements Company
{
    private $price;

    public function __construct($price){
        echo 'Initial Price set for ' . $price . "\n";
        $this->price = $price;
    }

    public function update($price)
    {
        echo 'Price Update for ' . $price . "\n";
        $this->price = $price;
    }
}