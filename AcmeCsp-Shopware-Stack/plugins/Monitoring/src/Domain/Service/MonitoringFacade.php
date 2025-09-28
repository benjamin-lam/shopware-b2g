<?php declare(strict_types=1);

namespace Acme\Csp\Monitoring\Domain\Service;

use Psr\Log\LoggerInterface;

final class MonitoringFacade
{
    public function __construct(private readonly LoggerInterface $logger) {}

    public function demo(): void
    {
        $this->logger->info('Monitoring: scaffold operational');
    }
}
