<?php

declare(strict_types=1);

namespace B2gApprovalWorkflow;

use Shopware\Core\Framework\Plugin;
use Shopware\Core\Framework\Plugin\Context\ActivateContext;
use Shopware\Core\Framework\Plugin\Context\DeactivateContext;
use Shopware\Core\Framework\Plugin\Context\InstallContext;
use Shopware\Core\Framework\Plugin\Context\UninstallContext;

/**
 * Proof-of-concept plugin entry point for the B2B approval workflow example.
 *
 * Comments indicate where real business logic needs to be added in a production setup.
 */
class B2gApprovalWorkflow extends Plugin
{
    public function install(InstallContext $installContext): void
    {
        parent::install($installContext);

        // @todo Seed approval states or configuration defaults during installation.
    }

    public function postInstall(InstallContext $installContext): void
    {
        parent::postInstall($installContext);

        // @todo Queue background jobs to backfill existing orders if necessary.
    }

    public function uninstall(UninstallContext $uninstallContext): void
    {
        $uninstallContext->setKeepUserData(true);

        parent::uninstall($uninstallContext);

        // @todo Implement cleanup logic if user data should be removed.
    }

    public function activate(ActivateContext $activateContext): void
    {
        parent::activate($activateContext);

        // @todo Warm up caches or register configuration on activation.
    }

    public function deactivate(DeactivateContext $deactivateContext): void
    {
        parent::deactivate($deactivateContext);

        // @todo Undo temporary setup when the plugin is deactivated.
    }
}
