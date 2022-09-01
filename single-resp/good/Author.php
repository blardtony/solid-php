<?php

declare(strict_types=1);

class Author
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