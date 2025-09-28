<?php declare(strict_types=1);

namespace Acme\Csp\Accessibility\Infrastructure\Api;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

#[Route(defaults: ['_routeScope' => ['storefront']])]
final class AccessibilityPingController
{
    #[Route(path: '/api/accessibility/ping', name: 'accessibility.ping', methods: ['GET'])]
    public function ping(): Response
    {
        return new Response('Accessibility OK');
    }
}
