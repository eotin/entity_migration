<?php

namespace App\Entity\Indicator\Scope;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Indicator\Scope\IndicatorScopeGroupMembershipRepository")
 */
class IndicatorScopeGroupMembership
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected int $id;

    /**
     * @ORM\ManyToOne(targetEntity="IndicatorScope", inversedBy="indicatorScopeGroupMemberships")
     * @ORM\JoinColumn(name="FK_indicatorScopeId", referencedColumnName="id")
     */
    private $indicatorScope;

    /**
     * @ORM\ManyToOne(targetEntity="IndicatorScopeGroup")
     * @ORM\JoinColumn(name="FK_indicatorScopeGroupId", referencedColumnName="id")
     */
    private $indicatorScopeGroup;

    /**
     * @ORM\Column(type="integer")
     */
    private int $sortOrder;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     */
    private bool $collapsable;
}
