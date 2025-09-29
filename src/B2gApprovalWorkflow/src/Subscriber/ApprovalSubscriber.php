<?php

declare(strict_types=1);

namespace B2gApprovalWorkflow\Subscriber;

use DateTimeImmutable;
use Shopware\Core\Checkout\Order\Entity\OrderEntity;
use Shopware\Core\Checkout\Order\Event\CheckoutOrderPlacedEvent;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepository;
use Shopware\Core\Framework\Uuid\Uuid;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Reacts to order placement and creates an approval request entry.
 */
class ApprovalSubscriber implements EventSubscriberInterface
{
    public function __construct(private readonly EntityRepository $approvalRequestRepository)
    {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            CheckoutOrderPlacedEvent::class => 'handleOrderPlaced',
        ];
    }

    public function handleOrderPlaced(CheckoutOrderPlacedEvent $event): void
    {
        $order = $event->getOrder();

        if (!$this->requiresApproval($order)) {
            return;
        }

        $orderCustomer = $order->getOrderCustomer();

        if ($orderCustomer === null || $orderCustomer->getCustomerId() === null) {
            return;
        }

        $this->approvalRequestRepository->create([
            [
                'id' => Uuid::randomHex(),
                'orderId' => $order->getId(),
                'status' => 'pending',
                'requestedById' => $orderCustomer->getCustomerId(),
                'requestedAt' => new DateTimeImmutable(),
                'payload' => [
                    'orderNumber' => $order->getOrderNumber(),
                    'amountTotal' => $order->getAmountTotal(),
                ],
            ],
        ], $event->getContext());
    }

    private function requiresApproval(OrderEntity $order): bool
    {
        // @todo Replace with real business logic, e.g. budget limits per cost center.
        return $order->getAmountTotal() > 500.00;
    }
}
