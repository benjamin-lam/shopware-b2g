<?php declare(strict_types=1);

namespace Acme\Csp\SsoIdm\Infrastructure\Api;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

#[Route(defaults: ['_routeScope' => ['storefront']])]
final class SsoIdmPingController
{
    #[Route(path: '/api/ssoidm/ping', name: 'ssoidm.ping', methods: ['GET'])]
    public function ping(): Response
    {
        return new Response('SsoIdm OK');
    }
}
