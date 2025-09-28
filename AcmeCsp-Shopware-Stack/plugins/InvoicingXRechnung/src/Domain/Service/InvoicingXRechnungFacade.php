<?php declare(strict_types=1);

namespace Acme\Csp\InvoicingXRechnung\Domain\Service;

use Psr\Log\LoggerInterface;

final class InvoicingXRechnungFacade
{
    public function __construct(private readonly LoggerInterface $logger) {}

    public function demo(): void
    {
        $this->logger->info('InvoicingXRechnung: scaffold operational');
    }
}
