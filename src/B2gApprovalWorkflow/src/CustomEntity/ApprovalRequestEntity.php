<?php

declare(strict_types=1);

namespace B2gApprovalWorkflow\CustomEntity;

use DateTimeInterface;
use Shopware\Core\Framework\DataAbstractionLayer\Entity;
use Shopware\Core\Framework\DataAbstractionLayer\EntityIdTrait;

/**
 * Lightweight entity to enable typed access to approval request records.
 */
class ApprovalRequestEntity extends Entity
{
    use EntityIdTrait;

    protected string $status;

    protected string $orderId;

    protected string $requestedById;

    protected ?string $approverId = null;

    protected DateTimeInterface $requestedAt;

    protected ?DateTimeInterface $decidedAt = null;

    protected ?array $payload = null;

    protected bool $isEscalated = false;

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function getOrderId(): string
    {
        return $this->orderId;
    }

    public function setOrderId(string $orderId): void
    {
        $this->orderId = $orderId;
    }

    public function getRequestedById(): string
    {
        return $this->requestedById;
    }

    public function setRequestedById(string $requestedById): void
    {
        $this->requestedById = $requestedById;
    }

    public function getApproverId(): ?string
    {
        return $this->approverId;
    }

    public function setApproverId(?string $approverId): void
    {
        $this->approverId = $approverId;
    }

    public function getRequestedAt(): DateTimeInterface
    {
        return $this->requestedAt;
    }

    public function setRequestedAt(DateTimeInterface $requestedAt): void
    {
        $this->requestedAt = $requestedAt;
    }

    public function getDecidedAt(): ?DateTimeInterface
    {
        return $this->decidedAt;
    }

    public function setDecidedAt(?DateTimeInterface $decidedAt): void
    {
        $this->decidedAt = $decidedAt;
    }

    public function getPayload(): ?array
    {
        return $this->payload;
    }

    public function setPayload(?array $payload): void
    {
        $this->payload = $payload;
    }

    public function isEscalated(): bool
    {
        return $this->isEscalated;
    }

    public function setIsEscalated(bool $isEscalated): void
    {
        $this->isEscalated = $isEscalated;
    }
}
