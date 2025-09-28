<?php

declare(strict_types=1);

namespace Acme\SwBasics\MqScheduledTasks\ScheduledTask;

use Psr\Log\LoggerInterface;
use Shopware\Core\Framework\MessageQueue\ScheduledTask\ScheduledTaskHandler;
use Symfony\Component\Messenger\MessageBusInterface;

/**
 * Handler, der die Scheduled Task in die Queue legt.
 */
class AcmeHeartbeatTaskHandler extends ScheduledTaskHandler
{
    public function __construct(
        MessageBusInterface $bus,
        private readonly LoggerInterface $logger
    ) {
        parent::__construct($bus);
    }

    public static function getHandledMessages(): iterable
    {
        return [AcmeHeartbeatTask::class];
    }

    public function run(): void
    {
        $this->logger->info('AcmeHeartbeatTask wurde ausgelöst.');
        parent::run();
    }
}
