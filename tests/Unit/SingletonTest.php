<?php

namespace Tests\Unit;

use App\Creational\Singleton\DB;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    /** @test */
    public function singleton_test(): void{
        $db = DB::getInstance();
        $db1 = DB::getInstance();
        $this->assertEquals($db, $db1);
    }
}