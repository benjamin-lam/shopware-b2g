<?php declare(strict_types=1);

namespace Acme\Csp\CostCenters\Core\Content\CostCenter;

use Shopware\Core\Framework\DataAbstractionLayer\EntityDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Collection\FieldCollection;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\PrimaryKey;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Required;
use Shopware\Core\Framework\DataAbstractionLayer\Field\IdField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\StringField;

final class CostCenterDefinition extends EntityDefinition
{
    public const ENTITY_NAME = 'acme_csp_cost_center';

    public function getEntityName(): string { return self::ENTITY_NAME; }
    public function getEntityClass(): string { return CostCenterEntity::class; }
    public function getCollectionClass(): string { return CostCenterCollection::class; }

    protected function defineFields(): FieldCollection
    {
        return new FieldCollection([
            (new IdField('id', 'id'))->addFlags(new Required(), new PrimaryKey()),
            (new StringField('code', 'code'))->addFlags(new Required()),
            new StringField('name', 'name'),
        ]);
    }
}
