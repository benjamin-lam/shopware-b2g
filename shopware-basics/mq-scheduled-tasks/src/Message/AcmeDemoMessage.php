<?php

declare(strict_types=1);

namespace Acme\SwBasics\MqScheduledTasks\Message;

/**
 * Asynchrone Nachricht für Demo-Zwecke.
 */
class AcmeDemoMessage
{
    public function __construct(public readonly string $payload)
    {
    }
}
