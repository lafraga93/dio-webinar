<?php

declare(strict_types=1);

namespace Tests;

use App\Employee;
use PHPUnit\Framework\TestCase;

final class EmployeeTest extends TestCase
{
    /**
     * @var Employee
     */
    private $employee;

    public function setUp(): void
    {
        $this->employee = new Employee();
    }

    public function testIfClassImplementsEmployeeInterface()
    {
        $this->assertInstanceOf('App\EmployeeInterface', $this->employee);
    }

    public function testIfClassHasIdAttribute(): void
    {
        $this->assertClassHasAttribute('id', 'App\Employee');
    }

    /**
     * @depends testIfClassHasIdAttribute
     */
    public function testIfIdCanBeSetAndRetrieve(): void
    {
        $id = 8;

        $this->employee->setId($id);
        $this->assertEquals($id, $this->employee->getId());
    }

    public function testIfClassHasNameAttribute(): void
    {
        $this->assertClassHasAttribute('name', 'App\Employee');
    }

    /**
     * @depends testIfClassHasNameAttribute
     */
    public function testIfNameCanBeSetAndRetrieve(): void
    {
        $name = 'Gustavo Fraga';

        $this->employee->setname($name);
        $this->assertEquals($name, $this->employee->getName());
    }

    public function testIfClassHasBaseSalaryAttribute(): void
    {
        $this->assertClassHasAttribute('baseSalary', 'App\Employee');
    }

    /**
     * @depends testIfClassHasBaseSalaryAttribute
     */
    public function testIfBaseSalaryCanBeSetAndRetrieve(): void
    {
        $salary = 1724.10;

        $this->employee->setBaseSalary($salary);
        $this->assertEquals($salary, $this->employee->getBaseSalary());
    }

    public function testIfClassHasPositionAttribute(): void
    {
        $this->assertClassHasAttribute('position', 'App\Employee');
    }

    /**
     * @depends testIfClassHasPositionAttribute
     */
    public function testIfPositionCanBeSetAndRetrieve(): void
    {
        $position = 'software_engineer';

        $this->employee->setPosition($position);
        $this->assertEquals($position, $this->employee->getPosition());
    }
}
