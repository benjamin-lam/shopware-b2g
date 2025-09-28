<?php declare(strict_types=1);

namespace Acme\Csp\Monitoring\Infrastructure\Api;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

#[Route(defaults: ['_routeScope' => ['storefront']])]
final class MonitoringPingController
{
    #[Route(path: '/api/monitoring/ping', name: 'monitoring.ping', methods: ['GET'])]
    public function ping(): Response
    {
        return new Response('Monitoring OK');
    }
}
