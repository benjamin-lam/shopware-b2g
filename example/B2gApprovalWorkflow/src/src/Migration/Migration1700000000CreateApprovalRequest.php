<?php

declare(strict_types=1);

namespace B2gApprovalWorkflow\Migration;

use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\Migration\MigrationStep;

/**
 * Creates the approval request table used by the proof-of-concept workflow.
 */
class Migration1700000000CreateApprovalRequest extends MigrationStep
{
    public function getCreationTimestamp(): int
    {
        return 1700000000;
    }

    public function update(Connection $connection): void
    {
        $connection->executeStatement(<<<SQL
            CREATE TABLE IF NOT EXISTS `b2g_approval_request` (
                `id` BINARY(16) NOT NULL,
                `order_id` BINARY(16) NOT NULL,
                `status` VARCHAR(32) NOT NULL,
                `requested_by_id` BINARY(16) NOT NULL,
                `approver_id` BINARY(16) NULL,
                `requested_at` DATETIME(3) NOT NULL,
                `decided_at` DATETIME(3) NULL,
                `payload` JSON NULL,
                `is_escalated` TINYINT(1) NOT NULL DEFAULT 0,
                `created_at` DATETIME(3) NOT NULL,
                `updated_at` DATETIME(3) NULL,
                PRIMARY KEY (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        SQL);
    }

    public function updateDestructive(Connection $connection): void
    {
        // @todo Implement destructive updates once the domain model stabilises.
    }
}
