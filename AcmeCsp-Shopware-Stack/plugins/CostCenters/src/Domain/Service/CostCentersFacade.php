<?php declare(strict_types=1);

namespace Acme\Csp\CostCenters\Domain\Service;

use Psr\Log\LoggerInterface;

final class CostCentersFacade
{
    public function __construct(private readonly LoggerInterface $logger) {}

    public function demo(): void
    {
        $this->logger->info('CostCenters: scaffold operational');
    }
}
