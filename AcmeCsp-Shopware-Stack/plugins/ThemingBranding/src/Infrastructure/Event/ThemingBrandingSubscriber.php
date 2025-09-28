<?php declare(strict_types=1);

namespace Acme\Csp\ThemingBranding\Infrastructure\Event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

final class ThemingBrandingSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents(): array
    {
        return [
            // Shopware/Core events hier eintragen
        ];
    }
}
