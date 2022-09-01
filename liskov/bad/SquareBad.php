<?php

declare(strict_types=1);
require __DIR__ . "/RectangleBad.php";
class SquareBad extends RectangleBad
{
    public function setWidth(int $width): void
    {
        $this->width = $width;
        $this->height = $width;
    }

    public function setHeight(int $height): void
    {
        $this->height = $height;
        $this->width = $height;
    }

}