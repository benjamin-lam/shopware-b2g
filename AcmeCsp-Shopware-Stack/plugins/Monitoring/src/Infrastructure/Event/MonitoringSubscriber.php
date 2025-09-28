<?php declare(strict_types=1);

namespace Acme\Csp\Monitoring\Infrastructure\Event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

final class MonitoringSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents(): array
    {
        return [
            // Shopware/Core events hier eintragen
        ];
    }
}
