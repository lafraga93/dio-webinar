<?php

declare(strict_types=1);

namespace App;

use App\Employee;

final class Calculator
{
    /**
     * @var Employee
     */
    private $employee;

    public function __construct(Employee $employee)
    {
        $this->employee = $employee;
    }

    public function calculate(): float
    {     
        if ($this->employee->getPosition() == 'trainee') {
            return $this->employee->getBaseSalary() + 150.10;
        }

        if ($this->employee->getPosition() == 'software_engineer') {
            return $this->employee->getBaseSalary() + 580.25;
        }
    }
}
