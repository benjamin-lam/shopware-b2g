<?php declare(strict_types=1);

namespace Acme\Csp\ApprovalWorkflow\Domain\Service;

use Psr\Log\LoggerInterface;

final class ApprovalWorkflowFacade
{
    public function __construct(private readonly LoggerInterface $logger) {}

    public function demo(): void
    {
        $this->logger->info('ApprovalWorkflow: scaffold operational');
    }
}
