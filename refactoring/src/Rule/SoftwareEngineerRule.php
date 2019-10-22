<?php

declare(strict_types=1);

namespace App\Rule;

use App\Rule\PositionRuleInterface;

final class SoftwareEngineerRule implements PositionRuleInterface
{
    /**
     * @var float
     */
    const BONUS_VALUE = 580.25;

    public function calculate(float $baseSalary): float
    {
        return $baseSalary += self::BONUS_VALUE;
    }
}
