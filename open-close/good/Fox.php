<?php

declare(strict_types=1);

class Fox implements CommunicateInterface
{

    public function speak(): string
    {
        return 'ring-ding-ding-ding-dingeringeding!, Wa-pa-pa-pa-pa-pa-pow!';
    }
}