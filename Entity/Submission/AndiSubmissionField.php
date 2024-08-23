<?php

namespace App\Entity\Submission;

use App\Entity\Field\FieldDataType;
use App\Entity\Submission\Fields\SubmissionGenericField;
use App\Entity\Submission\Fields\SubmissionTechnicalField;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Timestampable\Traits\TimestampableEntity;

/**
 * Class AndiSubmissionField.
 *
 * @ORM\Entity(repositoryClass="App\Repository\Submission\AndiSubmissionFieldRepository")
 * @ORM\Table(name="submission_field")
 */
class AndiSubmissionField
{
    use TimestampableEntity;

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected int $id;

    /**
     * @ORM\ManyToOne(targetEntity="AndiSubmissionTypeVersion", inversedBy="submissionFields")
     * @ORM\JoinColumn(name="FK_submissionTypeVersionId", referencedColumnName="id")
     */
    private AndiSubmissionTypeVersion $submissionTypeVersion;

    /**
     * @ORM\Column(type="string")
     */
    private string $name;

    /**
     * @var ?string
     * @ORM\Column(type="string", nullable=true)
     */
    private ?string $description;

    /**
     * @var ?string
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?string $orderInSMS;

    /**
     * @var ?SubmissionTechnicalField
     * @ORM\ManyToOne(targetEntity="App\Entity\Submission\Fields\SubmissionTechnicalField")
     * @ORM\JoinColumn(name="FK_submissionTechnicalFieldId", referencedColumnName="id")
     */
    private ?SubmissionTechnicalField $technicalField;

    /**
     * @var ?SubmissionGenericField
     * @ORM\ManyToOne(targetEntity="App\Entity\Submission\Fields\SubmissionGenericField")
     * @ORM\JoinColumn(name="FK_submissionGenericFieldId", referencedColumnName="id")
     */
    private ?SubmissionGenericField $genericField;

    /**
     * @var ?FieldDataType
     * @ORM\ManyToOne(targetEntity="App\Entity\Field\FieldDataType")
     * @ORM\JoinColumn(name="FK_fieldDataTypeId", referencedColumnName="id")
     */
    private ?FieldDataType $fieldDataType;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function getOrderInSMS(): ?string
    {
        return $this->orderInSMS;
    }

    public function setOrderInSMS(?string $orderInSMS): void
    {
        $this->orderInSMS = $orderInSMS;
    }

    /**
     * @return ?FieldDataType
     */
    public function getFieldDataType(): ?FieldDataType
    {
        return $this->fieldDataType;
    }

    /**
     * @param ?FieldDataType $fieldDataType
     */
    public function setFieldDataType(?FieldDataType $fieldDataType): void
    {
        $this->fieldDataType = $fieldDataType;
    }

    public function getTechnicalField(): ?SubmissionTechnicalField
    {
        return $this->technicalField;
    }

    public function setTechnicalField(?SubmissionTechnicalField $technicalField): void
    {
        $this->technicalField = $technicalField;
    }

    public function getGenericField(): ?SubmissionGenericField
    {
        return $this->genericField;
    }

    public function setGenericField(?SubmissionGenericField $genericField): void
    {
        $this->genericField = $genericField;
    }

    public function getSubmissionTypeVersion(): AndiSubmissionTypeVersion
    {
        return $this->submissionTypeVersion;
    }

    public function setSubmissionTypeVersion(AndiSubmissionTypeVersion $submissionTypeVersion): void
    {
        $this->submissionTypeVersion = $submissionTypeVersion;
    }
}
