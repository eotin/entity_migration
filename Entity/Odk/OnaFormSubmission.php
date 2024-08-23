<?php

namespace App\Entity\Odk;

abstract class OnaFormSubmission
{
    protected ?int $diseaseId = null;

    protected ?int $siteId = null;

    protected int $investigationConfigurationId;

    protected string $odkUUID;

    protected bool $odkEdited;

    protected ?\DateTime $odkLastEditedDate;

    protected ?int $odkLastEditedMicroSeconds = null;

    protected ?\DateTime $odkSubmissionTime;

    protected int $odkId;

    protected ?string $identifier = null;

    protected bool $identifierIsValid;

    protected ?\DateTime $today = null;

    protected int $todayYear;

    protected int $todayWeekNumber;

    protected string $investigationData;

    protected array $investigationDataArray;

    protected array $investigationMappedDataArray;

    protected bool $valid;

    protected ?string $comments = null;

    public function addComment($comment): void
    {
        $separator = '';

        if (!empty($this->comments)) {
            $separator = ".\r\n";
        }

        $this->comments .= ($separator.$comment);
    }

    public function appendComment($comment): void
    {
        $this->comments .= $comment;
    }

    public function toString(): string
    {
        return sprintf('OnaFormSubmission: [%s]', $this->investigationData);
    }

    public function getDiseaseId(): ?int
    {
        return $this->diseaseId;
    }

    public function setDiseaseId(?int $diseaseId): void
    {
        $this->diseaseId = $diseaseId;
    }

    public function getSiteId(): ?int
    {
        return $this->siteId;
    }

    public function setSiteId(?int $siteId): void
    {
        $this->siteId = $siteId;
    }

    public function getInvestigationConfigurationId(): int
    {
        return $this->investigationConfigurationId;
    }

    public function setInvestigationConfigurationId(int $investigationConfigurationId): void
    {
        $this->investigationConfigurationId = $investigationConfigurationId;
    }

    public function getOdkUUID(): string
    {
        return $this->odkUUID;
    }

    public function setOdkUUID(string $odkUUID): void
    {
        $this->odkUUID = $odkUUID;
    }

    public function isOdkEdited(): bool
    {
        return $this->odkEdited;
    }

    public function setOdkEdited(bool $odkEdited): void
    {
        $this->odkEdited = $odkEdited;
    }

    /**
     * @return ?\DateTime
     */
    public function getOdkLastEditedDate(): ?\DateTime
    {
        return $this->odkLastEditedDate;
    }

    /**
     * @param ?\DateTime $odkLastEditedDate
     */
    public function setOdkLastEditedDate(?\DateTime $odkLastEditedDate): void
    {
        $this->odkLastEditedDate = $odkLastEditedDate;
    }

    /**
     * @return ?int
     */
    public function getOdkLastEditedMicroSeconds(): ?int
    {
        return $this->odkLastEditedMicroSeconds;
    }

    /**
     * @param ?int $odkLastEditedMicroSeconds
     */
    public function setOdkLastEditedMicroSeconds(?int $odkLastEditedMicroSeconds): void
    {
        $this->odkLastEditedMicroSeconds = $odkLastEditedMicroSeconds;
    }

    /**
     * @return ?\DateTime
     */
    public function getOdkSubmissionTime(): ?\DateTime
    {
        return $this->odkSubmissionTime;
    }

    /**
     * @param ?\DateTime $odkSubmissionTime
     */
    public function setOdkSubmissionTime(?\DateTime $odkSubmissionTime): void
    {
        $this->odkSubmissionTime = $odkSubmissionTime;
    }

    public function getOdkId(): int
    {
        return $this->odkId;
    }

    public function setOdkId(int $odkId): void
    {
        $this->odkId = $odkId;
    }

    /**
     * @return ?string
     */
    public function getIdentifier(): ?string
    {
        return $this->identifier;
    }

    /**
     * @param ?string $identifier
     */
    public function setIdentifier(?string $identifier): void
    {
        $this->identifier = $identifier;
    }

    public function isIdentifierIsValid(): bool
    {
        return $this->identifierIsValid;
    }

    public function setIdentifierIsValid(bool $identifierIsValid): void
    {
        $this->identifierIsValid = $identifierIsValid;
    }

    /**
     * @return ?\DateTime
     */
    public function getToday(): ?\DateTime
    {
        return $this->today;
    }

    /**
     * @param ?\DateTime $today
     */
    public function setToday(?\DateTime $today): void
    {
        $this->today = $today;
    }

    public function getTodayYear(): int
    {
        return $this->todayYear;
    }

    public function setTodayYear(int $todayYear): void
    {
        $this->todayYear = $todayYear;
    }

    public function getTodayWeekNumber(): int
    {
        return $this->todayWeekNumber;
    }

    public function setTodayWeekNumber(int $todayWeekNumber): void
    {
        $this->todayWeekNumber = $todayWeekNumber;
    }

    public function getInvestigationData(): string
    {
        return $this->investigationData;
    }

    public function setInvestigationData(string $investigationData): void
    {
        $this->investigationData = $investigationData;
    }

    public function getInvestigationDataArray(): array
    {
        return $this->investigationDataArray;
    }

    public function setInvestigationDataArray(array $investigationDataArray): void
    {
        $this->investigationDataArray = $investigationDataArray;
    }

    public function getInvestigationMappedDataArray(): array
    {
        return $this->investigationMappedDataArray;
    }

    public function setInvestigationMappedDataArray(array $investigationMappedDataArray): void
    {
        $this->investigationMappedDataArray = $investigationMappedDataArray;
    }

    public function isValid(): bool
    {
        return $this->valid;
    }

    public function setValid(bool $valid): void
    {
        $this->valid = $valid;
    }

    public function getComments(): string
    {
        return $this->comments;
    }
}
