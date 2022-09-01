<?php

declare(strict_types=1);

class BlogPostBad
{
    private AuthorBad $author;

    private string $title;

    private string $content;

    private DateTime $date;

    //...

    public function getData(): array
    {
        return [
            'author' => $this->author->getFullName(),
            'title' => $this->title,
            'content' => $this->content,
            'timestamp' => $this->date->getTimestamp(),
        ];
    }

    public function printJson(): string
    {
        return json_encode($this->getData());
    }

    public function printHtml(): string
    {
        return `<article>
                    <h1>{$this->title}</h1>
                    <article>
                        <p>{$this->date->format('Y-m-d H:i:s')}</p>
                        <p>{$this->author->getFullName()}</p>
                        <p>{$this->content}</p>
                    </article>
                </article>`;
    }
}