<?php

declare(strict_types=1);

class Duck implements CommunicateInterface
{

    public function speak(): string
    {
        return 'quack quack';
    }
}