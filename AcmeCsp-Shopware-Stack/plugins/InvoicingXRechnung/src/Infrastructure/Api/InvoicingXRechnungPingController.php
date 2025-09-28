<?php declare(strict_types=1);

namespace Acme\Csp\InvoicingXRechnung\Infrastructure\Api;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

#[Route(defaults: ['_routeScope' => ['storefront']])]
final class InvoicingXRechnungPingController
{
    #[Route(path: '/api/invoicingxrechnung/ping', name: 'invoicingxrechnung.ping', methods: ['GET'])]
    public function ping(): Response
    {
        return new Response('InvoicingXRechnung OK');
    }
}
