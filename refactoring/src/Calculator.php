<?php

declare(strict_types=1);

namespace App;

use App\EmployeeInterface;
use App\Position;

final class Calculator
{
    /**
     * @var Employee
     */
    private $employee;

    public function __construct(EmployeeInterface $employee)
    {
        $this->employee = $employee;
    }

    public function calculate(): float
    {     
        $position = new Position($this->employee->getPosition());

        return $position->getRule()->calculate($this->employee->getBaseSalary());
    }

    /*
    public function calculate(): float
    {     
        if ($this->employee->getPosition() == 'trainee') {
            return $this->employee->getBaseSalary() + 150.10;
        }

        if ($this->employee->getPosition() == 'software_engineer') {
            return $this->employee->getBaseSalary() + 580.25;
        }
    }
    */
}
