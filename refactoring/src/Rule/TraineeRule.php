<?php

declare(strict_types=1);

namespace App\Rule;

use App\Rule\PositionRuleInterface;

final class TraineeRule implements PositionRuleInterface
{
    /**
     * @var float
     */
    const BONUS_VALUE = 150.10;

    public function calculate(float $baseSalary): float
    {
        return $baseSalary += self::BONUS_VALUE;
    }
}
