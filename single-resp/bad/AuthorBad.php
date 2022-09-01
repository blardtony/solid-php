<?php

declare(strict_types=1);

class AuthorBad
{
    private string $fullName;

    /**
     * @return string
     */
    public function getFullName(): string
    {
        return $this->fullName;
    }


}