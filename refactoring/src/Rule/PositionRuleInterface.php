<?php

declare(strict_types=1);

namespace App\Rule;

interface PositionRuleInterface
{
    public function calculate(float $baseSalary): float;
}
