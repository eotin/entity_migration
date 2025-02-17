<?php

namespace App\Entity\Indicator\Scope;

use App\Entity\Traits\IdentifierAutogeneratedTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Indicator\Scope\IndicatorScopeThresholdRepository")
 */
class IndicatorScopeThreshold
{
    use IdentifierAutogeneratedTrait;

    /**
     * @ORM\Column(type="string")
     */
    private string $colorRGB;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private ?float $minValue;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private ?float $maxValue;

    /**
     * @ORM\ManyToOne(targetEntity="IndicatorScope", inversedBy="indicatorScopeThreshold")
     * @ORM\JoinColumn(name="FK_scopeId", referencedColumnName="id")
     */
    private IndicatorScope $indicatorScope;
}
