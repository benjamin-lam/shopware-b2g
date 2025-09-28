<?php declare(strict_types=1);

namespace Acme\Csp\CostCenters\Infrastructure\Event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

final class CostCentersSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents(): array
    {
        return [
            // Shopware/Core events hier eintragen
        ];
    }
}
