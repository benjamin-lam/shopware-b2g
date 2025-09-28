#!/usr/bin/env bash
# init_skeleton.sh
# Usage: bash init_skeleton.sh "Acme" "Csp"
set -euo pipefail

VENDOR="${1:-Acme}"
SUITE="${2:-Csp}"

ROOT="${VENDOR}${SUITE}-Shopware-Stack"
MODULES=(
  RolesPermissions
  MandateManagement
  ApprovalWorkflow
  CostCenters
  InvoicingXRechnung
  BrokerIntegration
  ErpIntegration
  SsoIdm
  ThemingBranding
  Accessibility
  CustomForms
  AuditLogging
  Monitoring
  DrBackup
)

mkdir -p "$ROOT"
cd "$ROOT"

git init >/dev/null 2>&1 || true

cat > .gitignore <<'INNER_EOF'
/vendor/
/composer.lock
/.idea/
/node_modules/
/var/
/public/bundles/
/.ENV
.DS_Store
INNER_EOF

cat > README.md <<'INNER_EOF'
# Generic Service-Portal Stack (Shopware 6)

Zweck: Vorbereitete Modulbibliothek für B2B/Public-Sector-Anforderungen auf Shopware-Basis.
Kein Kundennamen. Allgemeine Problemstellung:
- Shopware OOTB deckt Governance/B2B-Anforderungen (Rollen, Genehmigungen, Mandanten, E-Rechnung, SSO, Audit) nicht vollständig ab.
- Ziel: Service-Portal (Bestellung = Antrag + Genehmigungen + Provisionierung) mit strengen Compliance-Vorgaben.

Struktur:
- /plugins/<Module> : eigenständige Shopware-Plugins (Scaffolds)
- /shared : wiederverwendbare Helpers/DTOs/Policies
- ROADMAP.md : empfohlene Umsetzungsreihenfolge & Best Practices
- ADRs/ : Architecture Decision Records
INNER_EOF

cat > ROADMAP.md <<'INNER_EOF'
# Roadmap (Entwurf)

## Phase 0 – Infrastruktur
- PSR-12, PHPStan (level max sinnvoll), PHPUnit
- CI: Lint, Stan, Test, Build/Package

## Phase 1 – Kern-Governance
- RolesPermissions (ACL-Erweiterung/Policy-Voter)
- ApprovalWorkflow (mehrstufige Freigaben, Eskalation)
- MandateManagement (Mandanten/Branding/Trennung)

## Phase 2 – Commerce/Finanzen
- CostCenters (Kostenstellen im Antrag/Checkout + Export)
- InvoicingXRechnung (XRechnung/ZUGFeRD Hooks)
- ErpIntegration (SAP/MACH Adapter, Outbox/Inbox)

## Phase 3 – Integrationen
- BrokerIntegration (Cloud-Broker API)
- SsoIdm (SAML/OIDC Anbindung, Rollen-Sync)

## Phase 4 – UX & Compliance
- CustomForms (Service-Anträge, Draft/Resume)
- Accessibility (WCAG/BITV Helpers)
- ThemingBranding (Mandanten-Themes)

## Phase 5 – Betrieb & Nachweis
- AuditLogging (revisionssichere Trails)
- Monitoring (Health/Metrics/Tracing)
- DrBackup (Backup/Restore/DR-Doku)

Querschnitt:
- Security (CSP, Nonces, Input-Hardening)
- Tests (Unit/Integration/E2E)
- Docs pro Modul (README, ADR)
INNER_EOF

mkdir -p ADRs shared/src shared/tests

cat > ADRs/0001-template.md <<'INNER_EOF'
# ADR: <Kurzer Titel>
Datum: YYYY-MM-DD
Status: Proposed | Accepted | Superseded

## Kontext
<Problemstellung/Entscheidungskontext kurz beschreiben>

## Entscheidung
<Was wird entschieden?>

## Konsequenzen
<Trade-offs, Risiken, Follow-ups>
INNER_EOF

cat > composer.json <<INNER_EOF
{
  "name": "$(echo "$VENDOR" | tr '[:upper:]' '[:lower:]')/$(echo "$SUITE" | tr '[:upper:]' '[:lower:]')-stack",
  "type": "project",
  "description": "Generic Shopware plugin stack for B2B/Public Sector service-portal use cases.",
  "license": "proprietary",
  "require": {
    "php": ">=8.1",
    "ext-json": "*"
  },
  "autoload": {
    "psr-4": {
      "${VENDOR}\${SUITE}\Shared\": "shared/src/"
    }
  }
}
INNER_EOF

cat > phpstan.neon <<'INNER_EOF'
parameters:
  level: 6
  paths:
    - plugins
    - shared/src
  checkGenericClassInNonGenericObjectType: false
INNER_EOF

cat > phpunit.xml.dist <<'INNER_EOF'
<?xml version="1.0" encoding="UTF-8"?>
<phpunit bootstrap="vendor/autoload.php" colors="true">
  <testsuites>
    <testsuite name="Unit">
      <directory>./plugins/*/tests</directory>
      <directory>./shared/tests</directory>
    </testsuite>
  </testsuites>
</phpunit>
INNER_EOF

cat > .editorconfig <<'INNER_EOF'
root = true
[*]
charset = utf-8
indent_style = space
indent_size = 4
end_of_line = lf
insert_final_newline = true
trim_trailing_whitespace = true
INNER_EOF

cat > .gitlab-ci.yml <<'INNER_EOF'
stages: [lint, test, build]

phpstan:
  stage: lint
  image: php:8.2-cli
  script:
    - curl -Ls https://github.com/phpstan/phpstan/releases/latest/download/phpstan.phar -o phpstan
    - php phpstan --version
    - php phpstan analyse

phpunit:
  stage: test
  image: php:8.2-cli
  script:
    - curl -Ls https://phar.phpunit.de/phpunit-10.phar -o phpunit
    - php phpunit --version
    - php phpunit

package:
  stage: build
  image: alpine:3.19
  script:
    - zip -r build.zip plugins shared README.md ROADMAP.md ADRs -x "**/vendor/*"
  artifacts:
    paths: [build.zip]
INNER_EOF

mkdir -p plugins

to_ns_path () {
  local value="$1"
  value="${value//\/\\}"
  printf '%s\n' "$value"
}

scaffold_plugin () {
  local module="$1"
  local pluginDir="plugins/${module}"
  local nsBase="${VENDOR}\${SUITE}\${module}"
  local nsEsc
  nsEsc="$(to_ns_path "${nsBase}")"

  mkdir -p "${pluginDir}/src/Domain/Model" \
           "${pluginDir}/src/Domain/Service" \
           "${pluginDir}/src/Infrastructure" \
           "${pluginDir}/src/Presentation/Storefront" \
           "${pluginDir}/src/Presentation/Admin" \
           "${pluginDir}/src/Resources/config" \
           "${pluginDir}/src/Resources/app/administration/src" \
           "${pluginDir}/src/Resources/app/storefront/src" \
           "${pluginDir}/src/Resources/snippet" \
           "${pluginDir}/src/Resources/views" \
           "${pluginDir}/src/Resources/public" \
           "${pluginDir}/src/Migration" \
           "${pluginDir}/tests"

  cat > "${pluginDir}/composer.json" <<INNER_EOF
{
  "name": "$(echo "$VENDOR" | tr '[:upper:]' '[:lower:]')/shopware-${module,,}",
  "type": "shopware-platform-plugin",
  "description": "${module} plugin scaffold",
  "license": "proprietary",
  "require": {
    "php": ">=8.1",
    "shopware/core": "^6.5"
  },
  "autoload": {
    "psr-4": {
      "${nsEsc}\": "src/"
    }
  },
  "extra": {
    "shopware-plugin-class": "${nsBase}\${module}",
    "label": "${module} (Scaffold)"
  }
}
INNER_EOF

  cat > "${pluginDir}/src/${module}.php" <<INNER_EOF
<?php declare(strict_types=1);

namespace ${nsBase};

use Shopware\Core\Framework\Plugin;
use Shopware\Core\Framework\Plugin\Context\InstallContext;

final class ${module} extends Plugin
{
    public function install(InstallContext $installContext): void
    {
        parent::install($installContext);
        // TODO: migrations, system config, ACL seeds
    }
}
INNER_EOF

  cat > "${pluginDir}/src/Resources/config/services.xml" <<INNER_EOF
<?xml version="1.0" ?>
<container xmlns="http://symfony.com/schema/dic/services"
           xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
           xsi:schemaLocation="http://symfony.com/schema/dic/services
           https://symfony.com/schema/dic/services/services-1.0.xsd">
  <services>
    <service id="${nsBase}\Domain\Service\${module}Facade" public="true">
      <argument type="service" id="logger"/>
    </service>

    <service id="${nsBase}\Infrastructure\Api\${module}PingController" public="true">
      <tag name="controller.service_arguments"/>
    </service>

    <service id="${nsBase}\Infrastructure\Event\${module}Subscriber">
      <tag name="kernel.event_subscriber"/>
    </service>
  </services>
</container>
INNER_EOF

  mkdir -p "${pluginDir}/src/Infrastructure/Api" "${pluginDir}/src/Infrastructure/Event"

  cat > "${pluginDir}/src/Infrastructure/Api/${module}PingController.php" <<INNER_EOF
<?php declare(strict_types=1);

namespace ${nsBase}\Infrastructure\Api;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

#[Route(defaults: ['_routeScope' => ['storefront']])]
final class ${module}PingController
{
    #[Route(path: '/api/${module,,}/ping', name: '${module,,}.ping', methods: ['GET'])]
    public function ping(): Response
    {
        return new Response('${module} OK');
    }
}
INNER_EOF

  cat > "${pluginDir}/src/Infrastructure/Event/${module}Subscriber.php" <<INNER_EOF
<?php declare(strict_types=1);

namespace ${nsBase}\Infrastructure\Event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

final class ${module}Subscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents(): array
    {
        return [
            // Shopware/Core events hier eintragen
        ];
    }
}
INNER_EOF

  cat > "${pluginDir}/src/Domain/Service/${module}Facade.php" <<INNER_EOF
<?php declare(strict_types=1);

namespace ${nsBase}\Domain\Service;

use Psr\Log\LoggerInterface;

final class ${module}Facade
{
    public function __construct(private readonly LoggerInterface $logger) {}

    public function demo(): void
    {
        $this->logger->info('${module}: scaffold operational');
    }
}
INNER_EOF

  cat > "${pluginDir}/src/Resources/app/administration/src/main.js" <<'INNER_EOF'
import './module'; // extend administration here
INNER_EOF

  cat > "${pluginDir}/src/Resources/app/storefront/src/main.js" <<'INNER_EOF'
// storefront enhancements here
INNER_EOF

  cat > "${pluginDir}/README.md" <<INNER_EOF
# ${module} (Shopware Plugin)

Problemstellung (allgemein):
B2B/Public-Sector Portale benötigen Governance/Compliance/Integrationen, die Shopware OOTB nicht vollständig liefert.

Ziel:
Grundgerüst (Domain/DI/Events/API) zur schnellen Ergänzung projektspezifischer Business-Logik.

Best Practices:
- Keine Core-Hacks; Events/Subscriber/Decorators verwenden.
- DAL statt direkter SQL-Zugriffe (außer Migrationen).
- System-Config/Policies dokumentieren.
- Unit/Integration-Tests früh anlegen.
INNER_EOF

  cat > "${pluginDir}/phpunit.xml.dist" <<'INNER_EOF'
<?xml version="1.0" encoding="UTF-8"?>
<phpunit bootstrap="vendor/autoload.php" colors="true">
  <testsuites>
    <testsuite name="Unit">
      <directory>./tests</directory>
    </testsuite>
  </testsuites>
</phpunit>
INNER_EOF

  cat > "${pluginDir}/tests/ExampleTest.php" <<'INNER_EOF'
<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ExampleTest extends TestCase
{
    public function testScaffold(): void
    {
        self::assertTrue(true);
    }
}
INNER_EOF

  mkdir -p "${pluginDir}/src/Resources/config"
  cat > "${pluginDir}/src/Resources/config/config.xml" <<INNER_EOF
<?xml version="1.0" ?>
<config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:noNamespaceSchemaLocation="https://raw.githubusercontent.com/shopware/platform/trunk/src/Core/System/SystemConfig/Schema/config.xsd">
  <card>
    <title>${module} Settings</title>
    <input-field type="text" name="${module,,}.example" label="Example setting"/>
  </card>
</config>
INNER_EOF
}

add_costcenter_entity () {
  local pluginDir="plugins/CostCenters"
  local nsBase="${VENDOR}\${SUITE}\CostCenters"
  local nsEsc
  nsEsc="$(to_ns_path "${nsBase}")"

  mkdir -p "${pluginDir}/src/Core/Content/CostCenter"
  cat > "${pluginDir}/src/Core/Content/CostCenter/CostCenterDefinition.php" <<INNER_EOF
<?php declare(strict_types=1);

namespace ${nsBase}\Core\Content\CostCenter;

use Shopware\Core\Framework\DataAbstractionLayer\EntityDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Collection\FieldCollection;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\PrimaryKey;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Required;
use Shopware\Core\Framework\DataAbstractionLayer\Field\IdField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\StringField;

final class CostCenterDefinition extends EntityDefinition
{
    public const ENTITY_NAME = 'acme_cost_center';

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
INNER_EOF

  cat > "${pluginDir}/src/Core/Content/CostCenter/CostCenterEntity.php" <<INNER_EOF
<?php declare(strict_types=1);

namespace ${nsBase}\Core\Content\CostCenter;

use Shopware\Core\Framework\DataAbstractionLayer\Entity;
use Shopware\Core\Framework\DataAbstractionLayer\EntityIdTrait;

class CostCenterEntity extends Entity
{
    use EntityIdTrait;

    protected string $code;
    protected ?string $name = null;

    public function getCode(): string { return $this->code; }
    public function setCode(string $v): void { $this->code = $v; }

    public function getName(): ?string { return $this->name; }
    public function setName(?string $v): void { $this->name = $v; }
}
INNER_EOF

  cat > "${pluginDir}/src/Core/Content/CostCenter/CostCenterCollection.php" <<INNER_EOF
<?php declare(strict_types=1);

namespace ${nsBase}\Core\Content\CostCenter;

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
INNER_EOF

  cat > "${pluginDir}/src/Migration/Migration1700000000CreateCostCenter.php" <<'INNER_EOF'
<?php declare(strict_types=1);

namespace Acme\Csp\CostCenters\Migration;

use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\Migration\MigrationStep;

class Migration1700000000CreateCostCenter extends MigrationStep
{
    public function getCreationTimestamp(): int { return 1700000000; }

    public function update(Connection $connection): void
    {
        $connection->executeStatement('
            CREATE TABLE IF NOT EXISTS `acme_cost_center` (
                `id` BINARY(16) NOT NULL,
                `code` VARCHAR(64) NOT NULL,
                `name` VARCHAR(255) NULL,
                `created_at` DATETIME(3) NOT NULL,
                `updated_at` DATETIME(3) NULL,
                PRIMARY KEY (`id`),
                UNIQUE KEY `uniq_cost_center_code` (`code`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        ');
    }

    public function updateDestructive(Connection $connection): void {}
}
INNER_EOF
}

add_approvalstep_entity () {
  local pluginDir="plugins/ApprovalWorkflow"
  local nsBase="${VENDOR}\${SUITE}\ApprovalWorkflow"
  local nsEsc
  nsEsc="$(to_ns_path "${nsBase}")"

  mkdir -p "${pluginDir}/src/Core/Content/ApprovalStep"
  cat > "${pluginDir}/src/Core/Content/ApprovalStep/ApprovalStepDefinition.php" <<INNER_EOF
<?php declare(strict_types=1);

namespace ${nsBase}\Core\Content\ApprovalStep;

use Shopware\Core\Framework\DataAbstractionLayer\EntityDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Collection\FieldCollection;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\PrimaryKey;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Required;
use Shopware\Core\Framework\DataAbstractionLayer\Field\IdField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\StringField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\IntField;

final class ApprovalStepDefinition extends EntityDefinition
{
    public const ENTITY_NAME = 'acme_approval_step';

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
INNER_EOF

  cat > "${pluginDir}/src/Core/Content/ApprovalStep/ApprovalStepEntity.php" <<INNER_EOF
<?php declare(strict_types=1);

namespace ${nsBase}\Core\Content\ApprovalStep;

use Shopware\Core\Framework\DataAbstractionLayer\Entity;
use Shopware\Core\Framework\DataAbstractionLayer\EntityIdTrait;

class ApprovalStepEntity extends Entity
{
    use EntityIdTrait;

    protected string $name;
    protected int $sequence;

    public function getName(): string { return $this->name; }
    public function setName(string $v): void { $this->name = $v; }

    public function getSequence(): int { return $this->sequence; }
    public function setSequence(int $v): void { $this->sequence = $v; }
}
INNER_EOF

  cat > "${pluginDir}/src/Core/Content/ApprovalStep/ApprovalStepCollection.php" <<INNER_EOF
<?php declare(strict_types=1);

namespace ${nsBase}\Core\Content\ApprovalStep;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

/**
 * @method void add(ApprovalStepEntity $entity)
 * @method void set(string $key, ApprovalStepEntity $entity)
 * @method ApprovalStepEntity[] getIterator()
 * @method ApprovalStepEntity[] getElements()
 * @method ApprovalStepEntity|null get(string $key)
 * @method ApprovalStepEntity|null first()
 * @method ApprovalStepEntity|null last()
 */
class ApprovalStepCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ApprovalStepEntity::class;
    }
}
INNER_EOF

  cat > "${pluginDir}/src/Migration/Migration1700000001CreateApprovalStep.php" <<'INNER_EOF'
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
            CREATE TABLE IF NOT EXISTS `acme_approval_step` (
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
INNER_EOF
}

for m in "${MODULES[@]}"; do
  scaffold_plugin "$m"
done

add_costcenter_entity
add_approvalstep_entity

echo "✅ Skeleton created at: $(pwd)"
echo "Next steps:"
echo " 1) composer install"
echo " 2) Kopiere ./plugins/* in deine Shopware-Instanz (custom/plugins) oder mounte das Repo"
echo " 3) Plugins in der Admin installieren/aktivieren"
echo " 4) Migrations ausführen (bin/console database:migrate)"
