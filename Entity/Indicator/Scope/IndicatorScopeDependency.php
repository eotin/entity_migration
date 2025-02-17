<?php

namespace App\Entity\Indicator\Scope;

use App\Entity\Traits\IdentifierAutogeneratedTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Indicator\Scope\IndicatorScopeDependencyRepository")
 * @ORM\Table(uniqueConstraints={@ORM\UniqueConstraint(name="indicator_scope_dependency_udx", columns={"FK_childIndicatorScopeId", "FK_parentIndicatorScopeId"})})
 * Class IndicatorScopeDependency
 */
class IndicatorScopeDependency
{
    use IdentifierAutogeneratedTrait;

    /**
     * @ORM\ManyToOne(targetEntity="IndicatorScope")
     * @ORM\JoinColumn(name="FK_parentIndicatorScopeId", referencedColumnName="id")
     */
    private IndicatorScope $parentIndicatorScope;

    /**
     * @ORM\ManyToOne(targetEntity="IndicatorScope")
     * @ORM\JoinColumn(name="FK_childIndicatorScopeId", referencedColumnName="id")
     */
    private IndicatorScope $childIndicatorScope;

    /**
     * @var int
     * @ORM\Column(type="integer", nullable=true)
     */
    public $dependencyOrder;

    public function getParentIndicatorScope(): IndicatorScope
    {
        return $this->parentIndicatorScope;
    }

    public function setParentIndicatorScope(IndicatorScope $parentIndicatorScope): void
    {
        $this->parentIndicatorScope = $parentIndicatorScope;
    }

    public function getChildIndicatorScope(): IndicatorScope
    {
        return $this->childIndicatorScope;
    }

    public function setChildIndicatorScope(IndicatorScope $childIndicatorScope): void
    {
        $this->childIndicatorScope = $childIndicatorScope;
    }

    public function getDependencyOrder(): int
    {
        return $this->dependencyOrder;
    }

    /**
     * @param int|null $dependencyOrder
     */
    public function setDependencyOrder($dependencyOrder): void
    {
        $this->dependencyOrder = $dependencyOrder;
    }
}
