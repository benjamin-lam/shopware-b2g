<?php declare(strict_types=1);

namespace Acme\Csp\ErpIntegration\Domain\Service;

use Psr\Log\LoggerInterface;

final class ErpIntegrationFacade
{
    public function __construct(private readonly LoggerInterface $logger) {}

    public function demo(): void
    {
        $this->logger->info('ErpIntegration: scaffold operational');
    }
}
