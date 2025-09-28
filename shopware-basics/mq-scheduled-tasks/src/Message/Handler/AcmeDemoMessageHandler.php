<?php

declare(strict_types=1);

namespace Acme\SwBasics\MqScheduledTasks\Message\Handler;

use Acme\SwBasics\MqScheduledTasks\Message\AcmeDemoMessage;
use Psr\Log\LoggerInterface;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

/**
 * Verarbeitet Demo-Messages aus der Queue.
 */
class AcmeDemoMessageHandler implements MessageHandlerInterface
{
    public function __construct(private readonly LoggerInterface $logger)
    {
    }

    public function __invoke(AcmeDemoMessage $message): void
    {
        // TODO: Nachricht verarbeiten. Hier nur Logging.
        $this->logger->info('AcmeDemoMessage verarbeitet.', [
            'payload' => $message->payload,
        ]);
    }
}
