<?php declare(strict_types=1);

namespace Acme\Csp\SsoIdm\Domain\Service;

use Psr\Log\LoggerInterface;

final class SsoIdmFacade
{
    public function __construct(private readonly LoggerInterface $logger) {}

    public function demo(): void
    {
        $this->logger->info('SsoIdm: scaffold operational');
    }
}
