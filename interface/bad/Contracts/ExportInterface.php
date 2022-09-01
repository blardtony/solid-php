<?php

declare(strict_types=1);

interface ExportInterface
{
    public function getPDF();
    public function getCSV();
}