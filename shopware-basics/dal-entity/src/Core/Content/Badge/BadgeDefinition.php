<?php

declare(strict_types=1);

namespace Acme\SwBasics\DalEntity\Core\Content\Badge;

use Shopware\Core\Framework\DataAbstractionLayer\EntityDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\PrimaryKey;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Required;
use Shopware\Core\Framework\DataAbstractionLayer\Field\IdField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\StringField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;

/**
 * Definition der `acme_badge` Entity. Weitere Felder/Beziehungen projektabhängig ergänzen.
 */
class BadgeDefinition extends EntityDefinition
{
    public const ENTITY_NAME = 'acme_badge';

    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    protected function defineFields(): FieldCollection
    {
        return new FieldCollection([
            (new IdField('id', 'id'))->addFlags(new PrimaryKey(), new Required()),
            (new StringField('name', 'name'))->addFlags(new Required()),
            new StringField('description', 'description'),
        ]);
    }
}
