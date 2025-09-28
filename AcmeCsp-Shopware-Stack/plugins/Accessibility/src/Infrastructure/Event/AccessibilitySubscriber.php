<?php declare(strict_types=1);

namespace Acme\Csp\Accessibility\Infrastructure\Event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

final class AccessibilitySubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents(): array
    {
        return [
            // Shopware/Core events hier eintragen
        ];
    }
}
