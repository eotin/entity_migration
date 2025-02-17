<?php

namespace App\Entity\Cases\Data;

use App\Entity\Investigation\Configuration\InvestigationConfiguration;
use App\Entity\Submission\AndiSubmissionTypeVersion;
use App\Entity\Traits\IdentifierAutogeneratedTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Cases\Data\CaseDataColumnGroupMembershipRepository")
 */
class CaseDataColumnGroupMembership
{
    use IdentifierAutogeneratedTrait;

    /**
     * @ORM\ManyToOne(targetEntity="CaseDataColumn", inversedBy="caseDataColumnGroupMemberships")
     * @ORM\JoinColumn(name="FK_caseDataColumnId", referencedColumnName="id")
     */
    private CaseDataColumn $caseDataColumn;

    /**
     * @ORM\ManyToOne(targetEntity="CaseDataColumnGroup", inversedBy="caseDataColumnGroupMemberships")
     * @ORM\JoinColumn(name="FK_caseDataColumnGroupId", referencedColumnName="id")
     */
    private CaseDataColumnGroup $caseDataColumnGroup;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Submission\AndiSubmissionTypeVersion")
     * @ORM\JoinColumn(name="FK_submissionTypeVersionId", referencedColumnName="id")
     */
    private AndiSubmissionTypeVersion $submissionTypeVersion;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Investigation\Configuration\InvestigationConfiguration")
     * @ORM\JoinColumn(name="FK_investigationConfigurationId", referencedColumnName="id")
     */
    private InvestigationConfiguration $investigationConfiguration;

    /**
     * @ORM\Column(type="integer")
     */
    private int $sortOrder;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     */
    private bool $columnIsEditable = false;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     */
    private bool $displayInFullMapMode = false;

    public function getCaseDataColumn(): CaseDataColumn
    {
        return $this->caseDataColumn;
    }

    public function setCaseDataColumn(CaseDataColumn $caseDataColumn): void
    {
        $this->caseDataColumn = $caseDataColumn;
    }

    public function getCaseDataColumnGroup(): CaseDataColumnGroup
    {
        return $this->caseDataColumnGroup;
    }

    public function setCaseDataColumnGroup(CaseDataColumnGroup $caseDataColumnGroup): void
    {
        $this->caseDataColumnGroup = $caseDataColumnGroup;
    }

    public function getSortOrder(): int
    {
        return $this->sortOrder;
    }

    public function setSortOrder(int $sortOrder): void
    {
        $this->sortOrder = $sortOrder;
    }

    public function isColumnIsEditable(): bool
    {
        return $this->columnIsEditable;
    }

    public function setColumnIsEditable(bool $columnIsEditable): void
    {
        $this->columnIsEditable = $columnIsEditable;
    }

    public function isDisplayInFullMapMode(): bool
    {
        return $this->displayInFullMapMode;
    }

    public function setDisplayInFullMapMode(bool $displayInFullMapMode): void
    {
        $this->displayInFullMapMode = $displayInFullMapMode;
    }
}
