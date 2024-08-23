<?php

namespace App\Entity\Indicator\Scope;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Indicator\Scope\IndicatorScopeGroupTabMembershipRepository")
 */
class IndicatorScopeGroupTabMembership
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected int $id;

    /**
     * @ORM\ManyToOne(targetEntity="IndicatorScopeGroup", inversedBy="indicatorScopeGroupTabMemberships")
     * @ORM\JoinColumn(name="FK_indicatorScopeGroupId", referencedColumnName="id")
     */
    private $indicatorScopeGroup;

    /**
     * @ORM\ManyToOne(targetEntity="IndicatorScopeTab")
     * @ORM\JoinColumn(name="FK_indicatorScopeTabId", referencedColumnName="id")
     */
    private $indicatorScopeTab;

    /**
     * @ORM\Column(type="integer")
     */
    private int $sortOrder;

    /**
     * @var int
     * @ORM\Column(type="boolean", nullable=false)
     */
    private bool $collapsable;
}
