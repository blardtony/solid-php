<?php

declare(strict_types=1);

require_once "CalculableAreaInterface.php";

class Square implements CalculableAreaInterface
{
    protected int $edge;

    /**
     * @param int $edge
     */
    public function __construct(int $edge)
    {
        $this->edge = $edge;
    }

    public function calculateArea(): int
    {
        return $this->edge ** 2;
    }
}