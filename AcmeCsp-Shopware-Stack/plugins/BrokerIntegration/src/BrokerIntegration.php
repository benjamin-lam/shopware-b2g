<?php declare(strict_types=1);

namespace Acme\Csp\BrokerIntegration;

use Shopware\Core\Framework\Plugin;
use Shopware\Core\Framework\Plugin\Context\InstallContext;

final class BrokerIntegration extends Plugin
{
    public function install(InstallContext $installContext): void
    {
        parent::install($installContext);
        // TODO: migrations, system config, ACL seeds
    }
}
