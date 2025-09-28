<?php declare(strict_types=1);

namespace Acme\Csp\ErpIntegration\Infrastructure\Api;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

#[Route(defaults: ['_routeScope' => ['storefront']])]
final class ErpIntegrationPingController
{
    #[Route(path: '/api/erpintegration/ping', name: 'erpintegration.ping', methods: ['GET'])]
    public function ping(): Response
    {
        return new Response('ErpIntegration OK');
    }
}
