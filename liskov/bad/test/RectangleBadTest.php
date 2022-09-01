<?php

declare(strict_types=1);

require __DIR__ . "/../SquareBad.php";
use PHPUnit\Framework\TestCase;

class RectangleBadTest extends TestCase
{
    public function testCalculateArea()
    {
        $shape = new SquareBad();
        $shape->setWidth(10);
        $shape->setHeight(2);

        $this->assertEquals(20, $shape->calculateArea()); // FAILS - 4 != 20

        $shape->setWidth(5);
        $this->assertEquals(10, $shape->calculateArea()); // FAILS - 25 != 10
    }
}