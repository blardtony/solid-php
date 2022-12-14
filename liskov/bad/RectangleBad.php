<?php

declare(strict_types=1);

class RectangleBad
{
    protected int $width;
    protected int $height;

    public function setWidth(int $width): void
    {
        $this->width = $width;
    }

    public function setHeight(int $height): void
    {
        $this->height = $height;
    }

    public function calculateArea(): int
    {
        return $this->height * $this->width;
    }

}