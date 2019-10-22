<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

use App\Calculator;
use App\Employee;

$data = json_decode(file_get_contents('externals/export.json'));

foreach ($data->funcionarios as $key => $value) {

    $employee = new Employee();

    $employee->setId($value->codigo);
    $employee->setName($value->nome);
    $employee->setBaseSalary($value->salario);
    $employee->setPosition($value->cargo);

    $calculator = new Calculator($employee);
    $salaryWithBonus = $calculator->calculate();

    echo "------------------------------------------------" . PHP_EOL;

    echo 'Código: ' 
            . $employee->getId() 
            . PHP_EOL . 
         'Nome: ' 
            . $employee->getName() 
            . PHP_EOL .
         'Cargo: ' 
            . $employee->getPosition() 
            . PHP_EOL .
         'Salário Base: ' 
            . $employee->getBaseSalary() 
            . PHP_EOL .
         'Salário + Bonificação: ' 
            . $salaryWithBonus
            . PHP_EOL
    ;
}
