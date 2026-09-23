<?php

namespace MyModule;

class PriceCalculator
{
    public function applyPercentageDiscount(float $price, float $percent): float
    {
        if ($percent < 0 || $percent > 100) {
            throw new \InvalidArgumentException('Discount percent must be between 0 and 100.');
        }

        return round($price - ($price * $percent / 100), 2);
    }
}
