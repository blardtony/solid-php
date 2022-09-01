<?php

declare(strict_types=1);

interface LoggerInterface
{
    public function logError(string $message): void;
}