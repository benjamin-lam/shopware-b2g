<?php

declare(strict_types=1);

namespace Acme\SwBasics\EventsSubscriberDecorator\Subscriber;

use Psr\Log\LoggerInterface;
use Shopware\Core\Checkout\Order\Event\CheckoutOrderPlacedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Reagiert auf Bestellabschlüsse. Hier können Notifications oder Integrationen ausgelöst werden.
 */
class CheckoutSubscriber implements EventSubscriberInterface
{
    public function __construct(private readonly LoggerInterface $logger)
    {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            CheckoutOrderPlacedEvent::class => 'onOrderPlaced',
        ];
    }

    public function onOrderPlaced(CheckoutOrderPlacedEvent $event): void
    {
        // TODO: Integrationen/Benachrichtigungen ergänzen.
        $this->logger->info('Acme CheckoutSubscriber ausgelöst.', [
            'orderId' => $event->getOrder()->getId(),
        ]);
    }
}
