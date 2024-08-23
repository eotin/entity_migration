<?php

namespace App\Entity\Submission;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class AndiSubmissionBusinessType.
 *
 * @ORM\Entity(repositoryClass="App\Repository\Submission\SubmissionBusinessTypeRepository")
 * @ORM\Table(
 *   name="submission_business_type",
 *   uniqueConstraints={@ORM\UniqueConstraint(name="submission_business_type_udx", columns={"code"})},
 *  )
 */
class AndiSubmissionBusinessType
{
    // [0] => Id , [1] => Code , [2] => Name, [3] => MobileCode
    public const LOCATION = [1, 'LOCATION', 'LOCATION', 'LOCATION'];
    public const CASE = [2, 'CASE', 'CASE', 'CASE'];
    public const FIELD = [3, 'FIELD', 'FIELD', 'DAILY'];
    public const ZERO = [4, 'ZERO', 'ZERO', 'WEEKLY'];

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     */
    protected $id;

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
    private string $mobileCode;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private ?string $notification;

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

    public function getMobileCode(): string
    {
        return $this->mobileCode;
    }

    public function setMobileCode(string $mobileCode): void
    {
        $this->mobileCode = $mobileCode;
    }

    public function getNotification(): ?string
    {
        return $this->notification;
    }

    public function setNotification(?string $notification): void
    {
        $this->notification = $notification;
    }
}
