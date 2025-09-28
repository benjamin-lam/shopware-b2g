<?php declare(strict_types=1);

namespace Acme\Csp\CustomForms\Domain\Service;

use Psr\Log\LoggerInterface;

final class CustomFormsFacade
{
    public function __construct(private readonly LoggerInterface $logger) {}

    public function demo(): void
    {
        $this->logger->info('CustomForms: scaffold operational');
    }
}
