<?php declare(strict_types=1);

namespace Acme\Csp\CustomForms\Infrastructure\Api;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

#[Route(defaults: ['_routeScope' => ['storefront']])]
final class CustomFormsPingController
{
    #[Route(path: '/api/customforms/ping', name: 'customforms.ping', methods: ['GET'])]
    public function ping(): Response
    {
        return new Response('CustomForms OK');
    }
}
