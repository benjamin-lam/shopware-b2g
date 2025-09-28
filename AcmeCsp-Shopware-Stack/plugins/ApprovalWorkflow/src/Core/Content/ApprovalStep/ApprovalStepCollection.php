<?php declare(strict_types=1);

namespace Acme\Csp\ApprovalWorkflow\Core\Content\ApprovalStep;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

/**
 * @method void add(ApprovalStepEntity $entity)
 * @method void set(string $key, ApprovalStepEntity $entity)
 * @method ApprovalStepEntity[] getIterator()
 * @method ApprovalStepEntity[] getElements()
 * @method ApprovalStepEntity|null get(string $key)
 * @method ApprovalStepEntity|null first()
 * @method ApprovalStepEntity|null last()
 */
class ApprovalStepCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ApprovalStepEntity::class;
    }
}
