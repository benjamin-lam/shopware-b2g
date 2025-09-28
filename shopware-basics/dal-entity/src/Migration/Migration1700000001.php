<?php

declare(strict_types=1);

namespace Acme\SwBasics\DalEntity\Migration;

use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\Migration\MigrationStep;

class Migration1700000001 extends MigrationStep
{
    public function getCreationTimestamp(): int
    {
        return 1700000001;
    }

    public function update(Connection $connection): void
    {
        $connection->executeStatement(
            'CREATE TABLE IF NOT EXISTS `acme_badge` (
                `id` BINARY(16) NOT NULL,
                `name` VARCHAR(255) NOT NULL,
                `description` LONGTEXT NULL,
                `created_at` DATETIME(3) NOT NULL,
                `updated_at` DATETIME(3) NULL,
                PRIMARY KEY (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci'
        );
    }

    public function updateDestructive(Connection $connection): void
    {
        // Optional: Tabelle entfernen oder Spalten löschen, wenn erforderlich.
    }
}
