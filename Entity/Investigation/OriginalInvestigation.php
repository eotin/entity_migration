<?php

namespace App\Entity\Investigation;

use App\Entity\AbstractJsonReadableEntity;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Blameable\Traits\BlameableEntity;
use Gedmo\Timestampable\Traits\TimestampableEntity;

/**
 * Some attributes are public as the method getValueForProperty is doing reflexion.
 *
 * @ORM\Entity(repositoryClass="App\Repository\Investigation\OriginalInvestigationRepository")
 * @ORM\Table(
 *   name="investigation_original")
 */
class OriginalInvestigation extends AbstractJsonReadableEntity implements InvestigationInterface
{
    use TimestampableEntity;
    use BlameableEntity;

    /**
     * No auto increment value, as we want ot have same id as Investigation.
     *
     * @ORM\Id
     * @ORM\Column(type="integer", nullable=false)
     */
    protected int $id;

    /**
     * @ORM\Column(type="string")
     */
    public string $identifier;

    /**
     * @var ?\DateTime
     * @ORM\Column(type="datetime", nullable=true)
     */
    public ?\DateTime $investigationDate = null;

    /**
     * @var ?bool
     * @ORM\Column(type="boolean", nullable=true)
     */
    public ?bool $diseaseConfirmed = false;

    /**
     * @var ?int
     * @ORM\Column(type="integer", nullable=true)
     */
    public ?int $turnaround = null;

    /**
     * @var ?\DateTime
     * @ORM\Column(type="datetime", nullable=true)
     */
    public ?\DateTime $submissionTime = null;

    /**
     * @var ?\DateTime
     * @ORM\Column(type="datetime", nullable=true)
     */
    public ?\DateTime $today = null;

    /**
     * @var ?array
     * @ORM\Column(type="json", nullable=true)
     */
    private ?array $jsonData = null;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getIdentifier(): string
    {
        return $this->identifier;
    }

    public function setIdentifier(string $identifier): void
    {
        $this->identifier = $identifier;
    }

    public function getInvestigationDate(): ?\DateTime
    {
        return $this->investigationDate;
    }

    public function setInvestigationDate(?\DateTime $investigationDate): void
    {
        $this->investigationDate = $investigationDate;
    }

    public function isDiseaseConfirmed(): ?bool
    {
        return $this->diseaseConfirmed;
    }

    public function setDiseaseConfirmed(?bool $diseaseConfirmed): void
    {
        $this->diseaseConfirmed = $diseaseConfirmed;
    }

    public function getTurnaround(): ?int
    {
        return $this->turnaround;
    }

    public function setTurnaround(?int $turnaround): void
    {
        $this->turnaround = $turnaround;
    }

    public function getSubmissionTime(): ?\DateTime
    {
        return $this->submissionTime;
    }

    public function setSubmissionTime(?\DateTime $submissionTime): void
    {
        $this->submissionTime = $submissionTime;
    }

    public function getToday(): ?\DateTime
    {
        return $this->today;
    }

    public function setToday(?\DateTime $today): void
    {
        $this->today = $today;
    }

    public function getJsonData(): ?array
    {
        return $this->jsonData;
    }

    public function setJsonData(?array $jsonData): void
    {
        $this->jsonData = $jsonData;
    }
}
