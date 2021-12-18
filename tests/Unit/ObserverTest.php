<?php

namespace Tests\Unit;

use App\Behavioral\Observer\Apple;
use App\Behavioral\Observer\Google;
use App\Behavioral\Observer\StockSimulator;
use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase
{
    /** @test */
    public function calculate_perimeter(): void{
        $stock_simulator = new StockSimulator();
        $company1 = new Google(19.99);
        $company2 = new Apple(15.99);
        $stock_simulator->add($company1);
        $stock_simulator->add($company2);
        $stock_simulator->update();
        $this->assertEquals([], []);
    }
}