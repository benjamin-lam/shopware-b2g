<?php declare(strict_types=1);

namespace Acme\Csp\ApprovalWorkflow\Core\Content\ApprovalStep;

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
