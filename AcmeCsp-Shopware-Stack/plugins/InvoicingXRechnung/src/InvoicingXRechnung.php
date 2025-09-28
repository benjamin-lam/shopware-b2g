<?php declare(strict_types=1);

namespace Acme\Csp\InvoicingXRechnung;

use Shopware\Core\Framework\Plugin;
use Shopware\Core\Framework\Plugin\Context\InstallContext;

final class InvoicingXRechnung extends Plugin
{
    public function install(InstallContext $installContext): void
    {
        parent::install($installContext);
        // @todo: migrations, system config, ACL seeds
    }
}
