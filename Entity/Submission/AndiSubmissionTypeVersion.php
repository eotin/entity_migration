<?php

namespace App\Entity\Submission;

use App\Entity\Traits\IdentifierAutogeneratedTrait;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Timestampable\Traits\TimestampableEntity;

/**
 * Class AndiSubmissionType.
 *
 * @ORM\Entity(repositoryClass="App\Repository\Submission\AndiSubmissionTypeVersionRepository")
 * @ORM\Table(
 *    name="submission_type_version",
 *    uniqueConstraints={@ORM\UniqueConstraint(name="submission_type_version_udx", columns={"version_code", "FK_submissionTypeId"})},
 *  )
 */
class AndiSubmissionTypeVersion
{
    use IdentifierAutogeneratedTrait;
    use TimestampableEntity;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    private string $versionCode;

    /**
     * @var ?string
     * @ORM\Column(type="text", nullable=true)
     */
    private ?string $XmlXsd;

    /**
     * @ORM\ManyToOne (targetEntity="AndiSubmissionType", inversedBy="versions")
     * @ORM\JoinColumn(name="FK_submissionTypeId", referencedColumnName="id", nullable=false)
     */
    private AndiSubmissionType $submissionType;

    /**
     * @var Collection
     * @ORM\OneToMany(targetEntity="App\Entity\Submission\AndiSubmissionField", mappedBy="submissionTypeVersion")
     */
    private $submissionFields;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private ?string $notification;

    public function __construct()
    {
        $this->submissionFields = new ArrayCollection();
    }

    public function getVersionCode(): string
    {
        return $this->versionCode;
    }

    public function setVersionCode(string $versionCode): void
    {
        $this->versionCode = $versionCode;
    }

    public function getXmlXsd(): ?string
    {
        return $this->XmlXsd;
    }

    public function setXmlXsd(?string $XmlXsd): void
    {
        $this->XmlXsd = $XmlXsd;
    }

    public function getSubmissionType(): AndiSubmissionType
    {
        return $this->submissionType;
    }

    public function setSubmissionType(AndiSubmissionType $submissionType): void
    {
        $this->submissionType = $submissionType;
        $submissionType->addVersion($this);
    }

    public function getSubmissionFields(): Collection
    {
        return $this->submissionFields;
    }

    public function setSubmissionFields(Collection $submissionFields): void
    {
        $this->submissionFields = $submissionFields;
    }

    public function getNotification(): ?string
    {
        return $this->notification;
    }

    public function setNotification(?string $notification): void
    {
        $this->notification = $notification;
    }

    public function __toString(): string
    {
        return $this->getSubmissionType()->getName().' ('.$this->getVersionCode().')';
    }
}
