<?php

namespace MyModule\Tests;

use MyModule\PriceCalculator;
use PHPUnit\Framework\TestCase;

class PriceCalculatorTest extends TestCase
{
    private PriceCalculator $calculator;

    protected function setUp(): void
    {
        $this->calculator = new PriceCalculator();
    }

    public function testAppliesA20PercentDiscount(): void
    {
        $this->assertSame(80.0, $this->calculator->applyPercentageDiscount(100.0, 20));
    }

    public function testRejectsANegativePercent(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->calculator->applyPercentageDiscount(100.0, -5);
    }
}
