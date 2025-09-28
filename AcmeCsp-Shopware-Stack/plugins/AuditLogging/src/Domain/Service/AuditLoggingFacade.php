<?php declare(strict_types=1);

namespace Acme\Csp\AuditLogging\Domain\Service;

use Psr\Log\LoggerInterface;

final class AuditLoggingFacade
{
    public function __construct(private readonly LoggerInterface $logger) {}

    public function demo(): void
    {
        $this->logger->info('AuditLogging: scaffold operational');
    }
}
