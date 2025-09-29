<?php

declare(strict_types=1);

namespace B2gApprovalWorkflow\CustomEntity;

use Shopware\Core\Checkout\Customer\CustomerDefinition;
use Shopware\Core\Checkout\Order\OrderDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\EntityDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\BoolField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\CreatedAtField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\DateTimeField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\PrimaryKey;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Required;
use Shopware\Core\Framework\DataAbstractionLayer\Field\FkField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\IdField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\JsonField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\StringField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\UpdatedAtField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;

/**
 * Entity definition that maps the approval request table for the workflow prototype.
 */
class ApprovalRequestDefinition extends EntityDefinition
{
    public const ENTITY_NAME = 'b2g_approval_request';

    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    public function getCollectionClass(): string
    {
        return ApprovalRequestCollection::class;
    }

    public function getEntityClass(): string
    {
        return ApprovalRequestEntity::class;
    }

    protected function defineFields(): FieldCollection
    {
        return new FieldCollection([
            (new IdField('id', 'id'))->addFlags(new PrimaryKey(), new Required()),
            (new FkField('order_id', 'orderId', OrderDefinition::class))->addFlags(new Required()),
            (new StringField('status', 'status', 32))->addFlags(new Required()),
            (new FkField('requested_by_id', 'requestedById', CustomerDefinition::class))->addFlags(new Required()),
            new FkField('approver_id', 'approverId', CustomerDefinition::class),
            (new DateTimeField('requested_at', 'requestedAt'))->addFlags(new Required()),
            new DateTimeField('decided_at', 'decidedAt'),
            new JsonField('payload', 'payload'),
            (new BoolField('is_escalated', 'isEscalated')),
            new CreatedAtField(),
            new UpdatedAtField(),
        ]);
    }
}
