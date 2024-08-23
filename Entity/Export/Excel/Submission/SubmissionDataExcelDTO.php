<?php

namespace App\Entity\Export\Excel\Submission;

use App\Entity\Cases\Data\DTO\CaseDataTabDTO;
use App\Entity\Core\Site;
use DateTime;

class SubmissionDataExcelDTO
{
    private bool $isInvestigation;

    private string $title;

    private Site $site;

    private ?DateTime $dateFrom;

    private ?DateTime $dateTo;

    private array $caseDataTabDTOs;

    private string $fileName;

    public function isInvestigation(): bool
    {
        return $this->isInvestigation;
    }

    public function setIsInvestigation(bool $isInvestigation): void
    {
        $this->isInvestigation = $isInvestigation;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getSite(): Site
    {
        return $this->site;
    }

    public function setSite(Site $site): void
    {
        $this->site = $site;
    }

    public function getDateFrom(): ?DateTime
    {
        return $this->dateFrom;
    }

    public function setDateFrom(?DateTime $dateFrom): void
    {
        $this->dateFrom = $dateFrom;
    }

    public function getDateTo(): ?DateTime
    {
        return $this->dateTo;
    }

    public function setDateTo(?DateTime $dateTo): void
    {
        $this->dateTo = $dateTo;
    }

    public function getCaseDataTabDTOs(): array
    {
        return $this->caseDataTabDTOs;
    }

    public function setCaseDataTabDTOs(array $caseDataTabDTOs): void
    {
        $this->caseDataTabDTOs = $caseDataTabDTOs;
    }

    public function addCaseDataTabDTO(CaseDataTabDTO $caseDataTabDTO): void
    {
        $this->caseDataTabDTOs[] = $caseDataTabDTO;
    }

    public function getFileName(): string
    {
        return $this->fileName;
    }

    public function setFileName(string $fileName): void
    {
        $this->fileName = $fileName;
    }
}
