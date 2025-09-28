<?php declare(strict_types=1);

namespace Acme\Csp\ApprovalWorkflow\Core\Content\ApprovalStep;

use Shopware\Core\Framework\DataAbstractionLayer\EntityDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Collection\FieldCollection;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\PrimaryKey;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Required;
use Shopware\Core\Framework\DataAbstractionLayer\Field\IdField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\StringField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\IntField;

final class ApprovalStepDefinition extends EntityDefinition
{
    public const ENTITY_NAME = 'acme_csp_approval_step';

    public function getEntityName(): string { return self::ENTITY_NAME; }
    public function getEntityClass(): string { return ApprovalStepEntity::class; }
    public function getCollectionClass(): string { return ApprovalStepCollection::class; }

    protected function defineFields(): FieldCollection
    {
        return new FieldCollection([
            (new IdField('id', 'id'))->addFlags(new Required(), new PrimaryKey()),
            (new StringField('name', 'name'))->addFlags(new Required()),
            (new IntField('sequence', 'sequence'))->addFlags(new Required())
        ]);
    }
}
