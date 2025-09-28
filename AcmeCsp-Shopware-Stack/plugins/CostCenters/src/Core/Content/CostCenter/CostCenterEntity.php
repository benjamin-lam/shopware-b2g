<?php declare(strict_types=1);

namespace Acme\Csp\CostCenters\Core\Content\CostCenter;

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
