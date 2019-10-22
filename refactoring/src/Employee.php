<?php

declare(strict_types=1);

namespace App;

final class Employee implements EmployeeInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var float
     */
    private $baseSalary;

    /**
     * @var string
     */
    private $position;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getBaseSalary(): float
    {
        return $this->baseSalary;
    }

    public function setBaseSalary(float $baseSalary): void
    {
        $this->baseSalary = $baseSalary;
    }

    public function getPosition(): string
    {
        return $this->position;
    }

    public function setPosition(string $position): void
    {
        $this->position = $position;
    }
}
