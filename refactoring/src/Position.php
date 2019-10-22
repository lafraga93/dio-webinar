<?php

declare(strict_types=1);

namespace App;

final class Position
{
    /**
     * @var array
     */
    private $positions = [
        "software_engineer" => "App\Rule\SoftwareEngineerRule",
        "trainee" => "App\Rule\TraineeRule",
    ];

    /**
     * @var string
     */
    private $rule;

    public function __construct(string $rule)
    {
        $this->rule = $this->positions[$rule];
    }

    public function getRule(): object
    {
        return new $this->rule;
    }
}
