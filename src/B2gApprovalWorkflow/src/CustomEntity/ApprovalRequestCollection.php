<?php

declare(strict_types=1);

namespace B2gApprovalWorkflow\CustomEntity;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

/**
 * @extends EntityCollection<ApprovalRequestEntity>
 */
class ApprovalRequestCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ApprovalRequestEntity::class;
    }
}
