<?php declare(strict_types=1);

namespace Acme\Csp\BrokerIntegration\Domain\Service;

use Psr\Log\LoggerInterface;

final class BrokerIntegrationFacade
{
    public function __construct(private readonly LoggerInterface $logger) {}

    public function demo(): void
    {
        $this->logger->info('BrokerIntegration: scaffold operational');
    }
}
