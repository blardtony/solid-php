<?php

declare(strict_types=1);

class Dog implements CommunicateInterface
{

    public function speak(): string
    {
        return 'woof woof';
    }
}