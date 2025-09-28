<?php declare(strict_types=1);

namespace Acme\Csp\RolesPermissions\Infrastructure\Api;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

#[Route(defaults: ['_routeScope' => ['storefront']])]
final class RolesPermissionsPingController
{
    #[Route(path: '/api/rolespermissions/ping', name: 'rolespermissions.ping', methods: ['GET'])]
    public function ping(): Response
    {
        return new Response('RolesPermissions OK');
    }
}
