<?php

declare(strict_types=1);

class HtmlBlogPostPrinter implements PrintableBlogPostInterface
{

    public function print(BlogPost $blogPost)
    {
        return `<article>
                    <h1>{$blogPost->getTitle()}</h1>
                    <article>
                        <h2>{$blogPost->getDate()->format('Y-m-d H:i:s')} - {$blogPost->getAuthor()->getFullName()}</h2>
                        <p>{$blogPost->getContent()}</p>
                    </article>
                </article>`;
    }
}