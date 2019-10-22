<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;

final class CalculatorTest extends TestCase
{
    public function testIfClassHasEmployeeAttribute(): void
    {
        $this->assertClassHasAttribute('employee', 'App\Calculator');
    }
}
