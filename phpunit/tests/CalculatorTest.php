<?php

declare(strict_types=1);

namespace Tests;

use App\Calculator;
use App\Employee;
use PHPUnit\Framework\TestCase;

final class CalculatorTest extends TestCase
{
    public function setUp(): void
    {
    }

    public function testIfClassHasEmployeeAttribute(): void
    {
        $this->assertClassHasAttribute('employee', 'App\Calculator');
    }

    public function testBonusValueIfSoftwareEngineer(): void
    {
        $employee = new Employee();

        $employee->setBaseSalary(3950.10);
        $employee->setPosition('software_engineer');

        $calculator = new Calculator($employee);
        $this->assertEquals(4530.35, $calculator->calculate());
    }

    public function testBonusValueIfTrainee(): void
    {
        $employee = new Employee();

        $employee->setBaseSalary(1950.10);
        $employee->setPosition('trainee');

        $calculator = new Calculator($employee);
        $this->assertEquals(2100.20, $calculator->calculate());
    }
}
