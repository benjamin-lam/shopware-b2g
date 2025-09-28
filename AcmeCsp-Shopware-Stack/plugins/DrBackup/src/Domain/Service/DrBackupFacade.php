<?php declare(strict_types=1);

namespace Acme\Csp\DrBackup\Domain\Service;

use Psr\Log\LoggerInterface;

final class DrBackupFacade
{
    public function __construct(private readonly LoggerInterface $logger) {}

    public function demo(): void
    {
        $this->logger->info('DrBackup: scaffold operational');
    }
}
