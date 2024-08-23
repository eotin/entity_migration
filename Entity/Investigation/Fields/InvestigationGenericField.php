<?php

namespace App\Entity\Investigation\Fields;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class InvestigationGenericField.
 *
 * @ORM\Entity(repositoryClass="App\Repository\Investigation\Fields\InvestigationGenericFieldRepository")
 * @ORM\Table(uniqueConstraints=
 *   { @ORM\UniqueConstraint(name="investigation_generic_field_udx", columns={"code", "field", "default_field"}) }
 * )
 */
class InvestigationGenericField
{
    // 0 -> Id, 1 -> Code, 2 -> Name, 3 -> Generic field name, 4 -> Default field name, 5 -> Default field type
    public const SUSPECTED_CASE_NAME = [1, 'SUSPECTED_CASE_NAME', 'Suspected Case Name', 'sc_name', 'patient_name', 'STRING'];
    public const SUSPECTED_CASE_ADDRESS = [2, 'SUSPECTED_CASE_ADDRESS', 'Suspected Case Address', 'sc_address', 'address', 'STRING'];
    public const ADMIN_LEVEL_0 = [3, 'ADMIN_LEVEL_0', 'Admin Level 0', 'admin_level_0', 'country', 'STRING'];
    public const ADMIN_LEVEL_1 = [4, 'ADMIN_LEVEL_1', 'Admin Level 1', 'admin_level_1', 'admin1', 'STRING'];
    public const ADMIN_LEVEL_2 = [5, 'ADMIN_LEVEL_2', 'Admin Level 2', 'admin_level_2', 'admin2', 'STRING'];
    public const ADMIN_LEVEL_3 = [6, 'ADMIN_LEVEL_3', 'Admin Level 3', 'admin_level_3', 'admin3', 'STRING'];
    public const DATE_ONSET = [7, 'DATE_ONSET', 'Date Onset', 'date_onset', 'date_onset', 'DATE'];
    public const GPS_COORDINATES = [8, 'GPS_COORDINATES', 'GPS Coordinates', 'gps_coord', 'gps1', 'GPS_COORDINATE'];
    public const SUSPECTED_CASE_AGE_MONTHS = [9, 'SUSPECTED_CASE_AGE_MONTHS', 'Suspected Case Age months', 'sc_age_m', 'age_months', 'NUMBER'];
    public const SUSPECTED_CASE_AGE_YEARS = [10, 'SUSPECTED_CASE_AGE_YEARS', 'Suspected Case Age years', 'sc_age_y', 'age_years', 'NUMBER'];
    public const PARENT_NAME = [11, 'PARENT_NAME', 'Parent Name', 'parent_name', 'parent_name', 'STRING'];
    public const SUSPECTED_CASE_SEX = [12, 'SUSPECTED_CASE_SEX', 'Suspected Case Sex', 'sc_sex', 'sex', 'STRING'];
    public const IST = [13, 'IST', 'Ist', 'ist', 'ist', 'STRING'];
    public const TOWN = [14, 'TOWN', 'Town', 'town_city', 'town_city', 'STRING'];
    public const PREVIOUSLY_REPORTED = [15, 'PREVIOUSLY_REPORTED', 'Previously Reported', 'prev_rep', 'prev_rep', 'BOOLEAN'];
    public const INFORMANT_NAME = [16, 'INFORMANT_NAME', 'Informant Name', 'inf_name', 'informant_name', 'STRING'];
    public const NOTIFICATION_DATE = [17, 'NOTIFICATION_DATE', 'Notification Date', 'notif_date', 'date_notified', 'DATE'];
    public const RELIGION = [18, 'SUSPECTED_CASE_RELIGION', 'Suspected Case Religion', 'sc_religion', 'religion', 'STRING'];
    public const INVESTIGATOR_TITLE = [19, 'INVESTIGATOR_TITLE', 'Investigator Title', 'inv_title', 'verify_title', 'STRING'];
    public const INVESTIGATOR_NAME = [20, 'INVESTIGATOR_NAME', 'Investigator Name', 'inv_name', 'investigator', 'STRING'];
    public const IS_CHILD = [21, 'IS_CHILD', 'Is Child', 'child', 'child', 'BOOLEAN'];
    public const NOT_TRUE_CASE_COMMENTS = [22, 'NOT_TRUE_CASE_COMMENTS', 'Not True case comments', 'not_truecase', 'not_truecase', 'STRING'];
    public const COMMENTS = [23, 'COMMENTS', 'Comments', 'comment', 'comment', 'STRING'];
    public const EPID_NUMBER = [24, 'EPID_NUMBER', 'Epid', 'epid_num', 'epid_num', 'STRING'];
    public const INVESTIGATOR_TITLE_OTHER = [25, 'INVESTIGATOR_TITLE_OTHER', 'Investigator Title', 'inv_title_other', 'verify_title_other', 'STRING'];
    public const DISEASE = [26, 'DISEASE', 'Disease', 'disease', 'disease', 'STRING'];

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
    private string $field;

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

    public function getField(): string
    {
        return $this->field;
    }

    public function setField(string $field): void
    {
        $this->field = $field;
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
