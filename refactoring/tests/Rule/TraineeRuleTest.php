<?php

declare(strict_types=1);

namespace Tests;

use App\Rule\TraineeRule;

use PHPUnit\Framework\TestCase;

final class TraineeRuleTest extends TestCase
{
    /**
     * @ TraineeRule
     */
    private $traineeRule;

    public function setUp(): void
    {
        $this->traineeRule = new TraineeRule();
    }
    
    public function testCalculationShouldBeValidValue(): void
    {
        $baseSalary = 4000.20;

        $this->assertEquals(
            $baseSalary + $this->traineeRule::BONUS_VALUE, 
            $this->traineeRule->calculate($baseSalary)
        );
    }
}
