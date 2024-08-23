<?php

namespace App\Entity\Submission\Fields;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class TechnicalField.
 *
 * @ORM\Entity(repositoryClass="App\Repository\Submission\Fields\SubmissionGenericFieldRepository")
 * @ORM\Table(uniqueConstraints=
 *   { @ORM\UniqueConstraint(name="submission_generic_field_udx", columns={"code", "field"}) }
 * )
 */
class SubmissionGenericField
{
    public const SUSPECTED_CASE_NAME = [1, 'SUSPECTED_CASE_NAME', 'Suspected Case Name', 'sc_name'];
    public const SUSPECTED_CASE_PHONE_NUMBER = [2, 'SUSPECTED_CASE_PHONE_NUMBER', 'Suspected Case Phone Number', 'sc_phone'];
    public const SUSPECTED_CASE_ADDRESS = [3, 'SUSPECTED_CASE_ADDRESS', 'Suspected Case Address', 'sc_address'];
    public const SUSPECTED_CASE_RESIDENCE = [4, 'SUSPECTED_CASE_RESIDENCE', 'Suspected Case Residence', 'sc_residence'];

    public const KIN_NAME = [5, 'KIN_NAME', 'Next of Kin Name', 'kin_name'];
    public const KIN_PHONE = [6, 'KIN_PHONE', 'Next of Kin Phone', 'kin_phone'];

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
}
