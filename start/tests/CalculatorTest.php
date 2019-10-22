<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

use App\Calculator;
use App\Employee;

final class CalculatorTest
{
    public function testBonusValueIfSoftwareEngineer(): bool
    {
        $employee = new Employee();

        $employee->setBaseSalary(3950.10);
        $employee->setPosition('software_engineer');

        $calculator = new Calculator($employee);

        if ($calculator->calculate() === 4530.35) {
            echo "testBonusValueIfSoftwareEngineer => SUCCESS" . PHP_EOL;
            
            return true;
        }

        echo 'testBonusValueIfSoftwareEngineer => ERROR' . PHP_EOL;

        return false;
    }

    /**
     * testBonusValueIfTrainee
     */
}

$calculatorTest = new CalculatorTest();
$calculatorTest->testBonusValueIfSoftwareEngineer();
