<?php

declare(strict_types=1);

namespace Tests;

use App\Rule\SoftwareEngineerRule;

use PHPUnit\Framework\TestCase;

final class SoftwareEngineerRuleTest extends TestCase
{
    /**
     * @ SoftwareEngineer
     */
    private $softwareEngineerRule;

    public function setUp(): void
    {
        $this->softwareEngineerRule = new SoftwareEngineerRule();
    }
    
    public function testCalculationShouldBeValidValue(): void
    {
        $baseSalary = 8410.55;

        $this->assertEquals(
            $baseSalary + $this->softwareEngineerRule::BONUS_VALUE, 
            $this->softwareEngineerRule->calculate($baseSalary)
        );
    }
}
