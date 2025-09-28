<?php declare(strict_types=1);

namespace Acme\Csp\ApprovalWorkflow\Migration;

use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\Migration\MigrationStep;

class Migration1700000001CreateApprovalStep extends MigrationStep
{
    public function getCreationTimestamp(): int { return 1700000001; }

    public function update(Connection $connection): void
    {
        $connection->executeStatement('
            CREATE TABLE IF NOT EXISTS `acme_csp_approval_step` (
                `id` BINARY(16) NOT NULL,
                `name` VARCHAR(128) NOT NULL,
                `sequence` INT NOT NULL,
                `created_at` DATETIME(3) NOT NULL,
                `updated_at` DATETIME(3) NULL,
                PRIMARY KEY (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        ');
    }

    public function updateDestructive(Connection $connection): void {}
}
