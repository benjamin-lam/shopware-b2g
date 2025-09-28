<?php

declare(strict_types=1);

namespace Acme\SwBasics\MqScheduledTasks\ScheduledTask;

use Shopware\Core\Framework\MessageQueue\ScheduledTask\ScheduledTask;

/**
 * Definiert eine wiederkehrende Task, die z. B. System-Health prüft.
 */
class AcmeHeartbeatTask extends ScheduledTask
{
    public static function getTaskName(): string
    {
        return 'acme.heartbeat';
    }

    public static function getDefaultInterval(): int
    {
        return 300; // alle 5 Minuten
    }
}
