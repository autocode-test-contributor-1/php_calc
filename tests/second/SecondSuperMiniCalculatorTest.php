<?php

use PHPUnit\Framework\TestCase;

class SecondSuperMiniCalculatorTest extends TestCase
{
    protected SuperMiniCalculator $superCalc;

    protected function setUp(): void
    {
        $this->superCalc = new SuperMiniCalculator();
    }

    public function testMultiply()
    {
        $this->markTestSkipped('must be revisited.');
        $this->assertEquals(8, $this->superCalc->multiply(6, 2, 2));
    }

    public function testAdd()
    {
        $this->assertEquals(6, $this->superCalc->add(2, 2, 2));
    }
}
