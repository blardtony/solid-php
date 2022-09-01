<?php

declare(strict_types=1);

class MailServiceBad
{
    private DatabaseLogger $logger;

    /**
     * @param DatabaseLogger $logger
     */
    public function __construct(DatabaseLogger $logger)
    {
        $this->logger = $logger;
    }

    public function sendEmail(): void
    {
        try {
            //TODO Implement sendEmail() method.
        }catch (SomeException $exception) {
            $this->logger->logError($exception->getMessage());
        }
    }
}