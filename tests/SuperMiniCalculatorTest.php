<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . "/../src/super/SuperMiniCalculator.php";

class SuperMiniCalculatorTest extends TestCase
{
    protected SuperMiniCalculator $superCalc;

    protected function setUp(): void
    {
        $this->superCalc = new SuperMiniCalculator();
    }

    public function testMultiply()
    {
        $this->assertEquals(27, $this->superCalc->multiply(3, 3, 3));
    }

    public function testAdd()
    {
        $this->assertEquals(6, $this->superCalc->add(2, 2, 2));
    }
}
