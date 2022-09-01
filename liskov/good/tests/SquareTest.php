<?php

declare(strict_types=1);

require __DIR__ . "/../Square.php";

use PHPUnit\Framework\TestCase;

class SquareTest extends TestCase
{
    public function testCalculateArea()
    {
        $shape = new Square(10);
        $this->assertEquals(100, $shape->calculateArea());

        $shape = new Square(5);
        $this->assertEquals(25, $shape->calculateArea());
    }
}