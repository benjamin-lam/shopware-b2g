<?php declare(strict_types=1);

namespace Acme\Csp\Accessibility\Domain\Service;

use Psr\Log\LoggerInterface;

final class AccessibilityFacade
{
    public function __construct(private readonly LoggerInterface $logger) {}

    public function demo(): void
    {
        $this->logger->info('Accessibility: scaffold operational');
    }
}
