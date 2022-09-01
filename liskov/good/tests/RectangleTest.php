<?php

declare(strict_types=1);

require __DIR__ . "/../Rectangle.php";

use PHPUnit\Framework\TestCase;

class RectangleTest extends TestCase
{
    public function testCalculateArea()
    {
        $shape = new Rectangle(10, 2);
        $this->assertEquals(20, $shape->calculateArea());

        $shape = new Rectangle(5, 2);
        $this->assertEquals(10, $shape->calculateArea());
    }
}