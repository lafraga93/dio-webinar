<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

use App\Employee;

final class CalculatorTest
{
    public function testCanBeSetAndRetrieveValidId(): bool
    {
        $id = 8;

        $employee = new Employee();
        $employee->setId($id);  

        if ($employee->getId() === 8) {
            echo "testCanBeSetAndRetrieveValidId => SUCCESS" . PHP_EOL;
            
            return true;
        }

        echo 'testCanBeSetAndRetrieveValidId => ERROR' . PHP_EOL;

        return false;
    }

    /**
     * testCanBeSetAndRetrieveValidName
     * testCanBeSetAndRetrieveValidBaseSalary
     * testCanBeSetAndRetrieveValidPosition
     */
}

$calculatorTest = new CalculatorTest();
$calculatorTest->testCanBeSetAndRetrieveValidId();
