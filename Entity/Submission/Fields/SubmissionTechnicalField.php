<?php

namespace App\Entity\Submission\Fields;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class TechnicalField.
 *
 * @ORM\Entity(repositoryClass="App\Repository\Submission\Fields\SubmissionTechnicalFieldRepository")
 * @ORM\Table(uniqueConstraints=
 *   { @ORM\UniqueConstraint(name="submission_technical_field_udx", columns={"code"}) }
 * )
 */
class SubmissionTechnicalField
{
    public const PHONE_TODAY = [1, 'PHONE_TODAY', 'Phone Today'];
    public const PHONE_IMEI = [2, 'PHONE_IMEI', 'Phone IMEI'];
    public const SUBMISSION_ID = [3, 'SUBMISSION_ID', 'Submission ID'];
    public const GATEWAY_NUMBER = [4, 'GATEWAY_NUMBER', 'Gateway Number'];
    public const LOCATION = [5, 'LOCATION', 'Location'];

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
}
