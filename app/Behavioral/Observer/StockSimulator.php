<?php

namespace App\Behavioral\Observer;

class StockSimulator implements Observer
{
    private $companies = [];

    public function add(Company $subject)
    {
        $this->companies[] = $subject;
    }

    public function update(){
        $this->notify(100);
    }

    public function notify($price)
    {
        foreach ($this->companies as $company){
            $company->update(rand(2399, 19999) / 100); // $price
        }
    }
}