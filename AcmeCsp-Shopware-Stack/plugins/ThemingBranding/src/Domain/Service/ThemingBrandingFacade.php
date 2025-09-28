<?php declare(strict_types=1);

namespace Acme\Csp\ThemingBranding\Domain\Service;

use Psr\Log\LoggerInterface;

final class ThemingBrandingFacade
{
    public function __construct(private readonly LoggerInterface $logger) {}

    public function demo(): void
    {
        $this->logger->info('ThemingBranding: scaffold operational');
    }
}
