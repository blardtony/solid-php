<?php

declare(strict_types=1);

class Communication
{
    public function communicate(CommunicateInterface $animal): string
    {
        return $animal->speak();
    }
}