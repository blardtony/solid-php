<?php

declare(strict_types=1);

class MailService
{
    private LoggerInterface $logger;

    /**
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function sendEmail(): void
    {
        try {
            //TODO Implement sendEmail() method.
        } catch (OtherException $exception) {
            $this->logger->logError($exception->getMessage());
        }
    }
}