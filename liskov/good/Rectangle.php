<?php

declare(strict_types=1);

require_once "CalculableAreaInterface.php";

class Rectangle implements CalculableAreaInterface
{
    protected int $width;
    protected int $height;

    /**
     * @param int $width
     * @param int $height
     */
    public function __construct(int $width, int $height)
    {
        $this->width = $width;
        $this->height = $height;
    }


    public function calculateArea(): int
    {
        return $this->width  * $this->height;
    }
}