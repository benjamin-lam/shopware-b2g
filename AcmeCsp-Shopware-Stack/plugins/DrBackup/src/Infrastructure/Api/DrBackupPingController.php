<?php declare(strict_types=1);

namespace Acme\Csp\DrBackup\Infrastructure\Api;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

#[Route(defaults: ['_routeScope' => ['storefront']])]
final class DrBackupPingController
{
    #[Route(path: '/api/drbackup/ping', name: 'drbackup.ping', methods: ['GET'])]
    public function ping(): Response
    {
        return new Response('DrBackup OK');
    }
}
