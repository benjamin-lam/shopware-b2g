<?php

declare(strict_types=1);

namespace Acme\SwBasics\PluginCore\Service;

use Psr\Log\LoggerInterface;

/**
 * Beispiel-Service: Projekte implementieren hier reale Business-Logik.
 */
class DemoService
{
    public function __construct(private readonly LoggerInterface $logger)
    {
    }

    public function handle(): void
    {
        // TODO: Eigene Logik ergänzen (z. B. API-Call). Aktuell nur Hinweis im Log.
        $this->logger->info('Acme DemoService wurde aufgerufen.');
    }
}
