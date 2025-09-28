<?php

declare(strict_types=1);

namespace Acme\SwBasics\StateMachine\Subscriber;

use Psr\Log\LoggerInterface;
use Shopware\Core\System\StateMachine\Event\StateMachineTransitionEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Überwacht Transitionen der `acme_order_state` State Machine.
 */
class StateTransitionSubscriber implements EventSubscriberInterface
{
    public function __construct(private readonly LoggerInterface $logger)
    {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            StateMachineTransitionEvent::class => 'onTransition',
        ];
    }

    public function onTransition(StateMachineTransitionEvent $event): void
    {
        if ($event->getStateMachineName() !== 'acme_order_state') {
            return;
        }

        // TODO: Zusätzliche Prüfungen oder Aktionen ausführen (z. B. Benachrichtigung).
        $this->logger->info('State Machine Transition verarbeitet.', [
            'from' => $event->getFromPlace()->getTechnicalName(),
            'to' => $event->getToPlace()->getTechnicalName(),
            'action' => $event->getTransition()->getActionName(),
        ]);
    }
}
