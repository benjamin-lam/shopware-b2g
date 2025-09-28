<?php declare(strict_types=1);

namespace Acme\Csp\CostCenters\Core\Content\CostCenter;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

/**
 * @method void add(CostCenterEntity $entity)
 * @method void set(string $key, CostCenterEntity $entity)
 * @method CostCenterEntity[] getIterator()
 * @method CostCenterEntity[] getElements()
 * @method CostCenterEntity|null get(string $key)
 * @method CostCenterEntity|null first()
 * @method CostCenterEntity|null last()
 */
class CostCenterCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return CostCenterEntity::class;
    }
}
