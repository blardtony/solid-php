<?php

declare(strict_types=1);

class JsonBlogPrinter implements PrintableBlogPostInterface
{

    public function print(BlogPost $blogPost)
    {
        return json_encode($blogPost->getData());
    }
}