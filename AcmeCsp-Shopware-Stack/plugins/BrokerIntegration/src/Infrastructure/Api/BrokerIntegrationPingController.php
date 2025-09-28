<?php declare(strict_types=1);

namespace Acme\Csp\BrokerIntegration\Infrastructure\Api;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

#[Route(defaults: ['_routeScope' => ['storefront']])]
final class BrokerIntegrationPingController
{
    #[Route(path: '/api/brokerintegration/ping', name: 'brokerintegration.ping', methods: ['GET'])]
    public function ping(): Response
    {
        return new Response('BrokerIntegration OK');
    }
}
