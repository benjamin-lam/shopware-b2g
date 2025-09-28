<?php

declare(strict_types=1);

namespace Acme\SwBasics\EventsSubscriberDecorator\Decorator;

use Shopware\Core\Checkout\Cart\LineItem\LineItemCollection;
use Shopware\Core\Checkout\Cart\LineItem\LineItemFactoryHandlerInterface;

/**
 * Decorator für den LineItemService. Ergänzt zusätzliche Prüfungen vor der Rückgabe.
 */
class LineItemServiceDecorator implements LineItemFactoryHandlerInterface
{
    public function __construct(private readonly LineItemFactoryHandlerInterface $inner)
    {
    }

    public function supports(string $type): bool
    {
        return $this->inner->supports($type);
    }

    public function create(string $type, array $data, string $salesChannelContextId): LineItemCollection
    {
        // TODO: Daten vor dem Erzeugen validieren oder anreichern.
        return $this->inner->create($type, $data, $salesChannelContextId);
    }
}
