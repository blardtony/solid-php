<?php

declare(strict_types=1);

interface PrintableBlogPostInterface
{
    public function print(BlogPost $blogPost);
}