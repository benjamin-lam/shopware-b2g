<?php declare(strict_types=1);

namespace Acme\Csp\ApprovalWorkflow\Infrastructure\Api;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

#[Route(defaults: ['_routeScope' => ['storefront']])]
final class ApprovalWorkflowPingController
{
    #[Route(path: '/api/approvalworkflow/ping', name: 'approvalworkflow.ping', methods: ['GET'])]
    public function ping(): Response
    {
        return new Response('ApprovalWorkflow OK');
    }
}
