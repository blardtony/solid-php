<?php

declare(strict_types=1);

class CommunicationBad
{
    public function communicate($animal): string
    {
        switch (true) {
            case $animal instanceof DogBad:
                return $animal->bark();
            case $animal instanceof DuckBad:
                return $animal->quack();
            case $animal instanceof FoxBad:
                return $animal->whatDoesTheFoxSay();
            default:
                throw new \InvalidArgumentException('Unknown animal');
        }
    }
}