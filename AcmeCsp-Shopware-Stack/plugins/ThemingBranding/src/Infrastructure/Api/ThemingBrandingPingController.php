<?php declare(strict_types=1);

namespace Acme\Csp\ThemingBranding\Infrastructure\Api;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

#[Route(defaults: ['_routeScope' => ['storefront']])]
final class ThemingBrandingPingController
{
    #[Route(path: '/api/themingbranding/ping', name: 'themingbranding.ping', methods: ['GET'])]
    public function ping(): Response
    {
        return new Response('ThemingBranding OK');
    }
}
