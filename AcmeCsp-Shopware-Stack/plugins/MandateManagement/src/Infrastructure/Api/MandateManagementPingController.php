<?php declare(strict_types=1);

namespace Acme\Csp\MandateManagement\Infrastructure\Api;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

#[Route(defaults: ['_routeScope' => ['storefront']])]
final class MandateManagementPingController
{
    #[Route(path: '/api/mandatemanagement/ping', name: 'mandatemanagement.ping', methods: ['GET'])]
    public function ping(): Response
    {
        return new Response('MandateManagement OK');
    }
}
