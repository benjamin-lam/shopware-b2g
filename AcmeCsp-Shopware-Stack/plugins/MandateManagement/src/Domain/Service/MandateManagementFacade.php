<?php declare(strict_types=1);

namespace Acme\Csp\MandateManagement\Domain\Service;

use Psr\Log\LoggerInterface;

final class MandateManagementFacade
{
    public function __construct(private readonly LoggerInterface $logger) {}

    public function demo(): void
    {
        $this->logger->info('MandateManagement: scaffold operational');
    }
}
