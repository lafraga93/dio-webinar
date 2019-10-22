<?php

declare(strict_types=1);

require_once '../vendor/autoload.php';

use App\Calculator;
use App\Employee;

$mpdf = new \Mpdf\Mpdf();

$output = '

<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}
td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}
tr:nth-child(even) {
    background-color: #dddddd;
}
</style>

<table>
    <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Cargo</th>
        <th>Salário Base</th>
        <th>Salário + Bonificação</th>
    </tr>
';

$data = json_decode(file_get_contents('../externals/export.json'));

foreach ($data->funcionarios as $key => $value) {

    $employee = new Employee();

    $employee->setId($value->codigo);
    $employee->setName($value->nome);
    $employee->setBaseSalary($value->salario);
    $employee->setPosition($value->cargo);

    $calculator = new Calculator($employee);
    $salaryWithBonus = $calculator->calculate();

    $output .= '
        <tr>
            <td>' . $employee->getId()  . '</td>
            <td>' . $employee->getName() . '</td>
            <td>' . $employee->getPosition() . '</td>
            <td>' . $employee->getBaseSalary()  . '</td>
            <td>' . $salaryWithBonus . '</td>
        </tr>
    ';
}

$output .= '</table>';

$mpdf->WriteHTML($output);
$mpdf->Output();
