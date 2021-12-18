<?php

namespace App\Behavioral\Observer;

interface Observer
{
    public function add(Company $subject);
    public function notify($price);
}