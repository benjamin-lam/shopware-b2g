<?php declare(strict_types=1);

namespace Acme\Csp\RolesPermissions\Domain\Service;

use Psr\Log\LoggerInterface;

final class RolesPermissionsFacade
{
    public function __construct(private readonly LoggerInterface $logger) {}

    public function demo(): void
    {
        $this->logger->info('RolesPermissions: scaffold operational');
    }
}
