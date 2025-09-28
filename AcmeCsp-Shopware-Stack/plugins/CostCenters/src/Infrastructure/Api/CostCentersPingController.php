<?php declare(strict_types=1);

namespace Acme\Csp\CostCenters\Infrastructure\Api;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

#[Route(defaults: ['_routeScope' => ['storefront']])]
final class CostCentersPingController
{
    #[Route(path: '/api/costcenters/ping', name: 'costcenters.ping', methods: ['GET'])]
    public function ping(): Response
    {
        return new Response('CostCenters OK');
    }
}
