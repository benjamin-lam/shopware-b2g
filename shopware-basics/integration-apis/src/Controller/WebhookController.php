<?php

declare(strict_types=1);

namespace Acme\SwBasics\IntegrationApis\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Empfängt Webhooks unter `/acme/webhook`. Projektteams ergänzen HMAC-Prüfungen und Verarbeitung.
 */
class WebhookController
{
    public function __construct(private readonly LoggerInterface $logger)
    {
    }

    #[Route(path: '/acme/webhook', name: 'acme.webhook', defaults: ['csrf_protected' => false], methods: ['POST'])]
    public function __invoke(Request $request): JsonResponse
    {
        // TODO: HMAC/Signature validieren und Payload verarbeiten.
        $payload = $request->getContent();
        $this->logger->info('Webhook empfangen.', ['payload' => $payload]);

        return new JsonResponse(['status' => 'received']);
    }
}
