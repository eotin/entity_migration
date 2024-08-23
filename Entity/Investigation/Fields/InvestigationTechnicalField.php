<?php

namespace App\Entity\Investigation\Fields;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class InvestigationTechnicalField.
 *
 * @ORM\Entity(repositoryClass="App\Repository\Investigation\Fields\InvestigationTechnicalFieldRepository")
 * @ORM\Table(uniqueConstraints=
 *   { @ORM\UniqueConstraint(name="investigation_technical_field_udx", columns={"code", "default_field"}) }
 * )
 */
class InvestigationTechnicalField
{
    // 0 -> Id, 1 -> Code, 2 -> Name, 3 -> Default field name, 4 -> Default field type
    public const FIELD_ODK_UUID = [1, 'FIELD_ODK_UUID', 'ODK Uuid', '_uuid', 'STRING'];
    public const FIELD_ODK_ID = [2, 'FIELD_ODK_ID', 'ODK Id', '_id', 'NUMBER'];
    public const FIELD_ODK_EDITED = [3, 'FIELD_ODK_EDITED', 'ODK Edited', '_edited', 'BOOLEAN'];
    public const FIELD_ODK_LAST_EDITED = [4, 'FIELD_ODK_LAST_EDITED', 'ODK Last Edited', '_last_edited', 'DATE'];
    public const FIELD_ODK_SUBMISSION_TIME = [5, 'FIELD_ODK_SUBMISSION_TIME', 'ODK Submission Time', '_submission_time', 'DATE']; // Reception Date, When the investigation was received on the ONA server. Should be a dateTime ?
    public const FIELD_ODK_TODAY = [6, 'FIELD_ODK_TODAY', 'ODK Today', 'today', 'DATE']; // Collection Date, When the investigation was filled in by the investigator
    public const FIELD_ODK_RSID = [7, 'FIELD_ODK_RSID', 'ODK RSID', 'avadar_id', 'STRING'];
    public const FIELD_ODK_CONFIRMED_DISEASE = [8, 'FIELD_ODK_CONFIRMED_DISEASE', 'Confirm Disease', 'verify_case', 'BOOLEAN'];
    public const FIELD_ODK_CONFIRMATION_DATE = [9, 'FIELD_ODK_CONFIRMATION_DATE', 'Disease Confirmation Date', 'date_case_verified', 'DATE'];

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private string $code;

    /**
     * @ORM\Column(type="string")
     */
    private string $name;

    /**
     * @ORM\Column(type="string")
     */
    private string $defaultField;

    /**
     * @ORM\Column(type="string")
     */
    private string $defaultType;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDefaultField(): string
    {
        return $this->defaultField;
    }

    public function setDefaultField(string $defaultField): void
    {
        $this->defaultField = $defaultField;
    }

    public function getDefaultType(): string
    {
        return $this->defaultType;
    }

    public function setDefaultType(string $defaultType): void
    {
        $this->defaultType = $defaultType;
    }
}
