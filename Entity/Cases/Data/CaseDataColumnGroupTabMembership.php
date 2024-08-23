<?php

namespace App\Entity\Cases\Data;

use App\Entity\Traits\IdentifierAutogeneratedTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Cases\Data\CaseDataColumnGroupTabMembershipRepository")
 */
class CaseDataColumnGroupTabMembership
{
    use IdentifierAutogeneratedTrait;

    /**
     * @ORM\ManyToOne(targetEntity="CaseDataColumnGroup", inversedBy="caseDataColumnGroupTabMemberships")
     * @ORM\JoinColumn(name="FK_caseDataColumnGroupId", referencedColumnName="id")
     */
    private CaseDataColumnGroup $caseDataColumnGroup;

    /**
     * @ORM\ManyToOne(targetEntity="CaseDataColumnTab", inversedBy="caseDataColumnGroupTabMemberships")
     * @ORM\JoinColumn(name="FK_caseDataColumnTabId", referencedColumnName="id")
     */
    private CaseDataColumnTab $caseDataColumnTab;

    /**
     * @ORM\Column(type="integer")
     */
    private int $sortOrder;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     */
    private bool $hideIfAllFieldsEmpty;

    public function getCaseDataColumnGroup(): CaseDataColumnGroup
    {
        return $this->caseDataColumnGroup;
    }

    public function setCaseDataColumnGroup(CaseDataColumnGroup $caseDataColumnGroup): void
    {
        $this->caseDataColumnGroup = $caseDataColumnGroup;
    }

    public function getCaseDataColumnTab(): CaseDataColumnTab
    {
        return $this->caseDataColumnTab;
    }

    public function setCaseDataColumnTab(CaseDataColumnTab $caseDataColumnTab): void
    {
        $this->caseDataColumnTab = $caseDataColumnTab;
    }

    public function getSortOrder(): int
    {
        return $this->sortOrder;
    }

    public function setSortOrder(int $sortOrder): void
    {
        $this->sortOrder = $sortOrder;
    }

    public function isHideIfAllFieldsEmpty(): bool
    {
        return $this->hideIfAllFieldsEmpty;
    }

    public function setHideIfAllFieldsEmpty(bool $hideIfAllFieldsEmpty): void
    {
        $this->hideIfAllFieldsEmpty = $hideIfAllFieldsEmpty;
    }
}
