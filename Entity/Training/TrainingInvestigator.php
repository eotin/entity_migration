<?php

namespace App\Entity\Training;

use App\Entity\ContactInterface;
use App\Entity\Traits\IdentifierAutogeneratedTrait;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Blameable\Traits\BlameableEntity;
use Gedmo\Timestampable\Traits\TimestampableEntity;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Informant.
 *
 * @ORM\Entity(repositoryClass="App\Repository\Training\TrainingInvestigatorRepository")
 *
 * @UniqueEntity(fields="phoneNumber", message="This phone number already exists")
 */
class TrainingInvestigator implements ContactInterface
{
    use IdentifierAutogeneratedTrait;
    use TimestampableEntity;
    use BlameableEntity;

    /**
     * @ORM\Column(type="string", nullable=false)
     * @Assert\Regex (pattern="/^[+][0-9]{2,3}$/", message="The value should begin with + and have 2 or 3 numbers")
     */
    protected string $phoneCode;

    /**
     * @ORM\Column(type="string", nullable=false, unique=true)
     * @Assert\Regex (pattern="/^[+][0-9]{6,}$/", message="The value should begin with + and have at least 6 numbers")
     * @App\Constraint\TrainingInvestigator\TrainingInvestigatorConstraint
     */
    protected string $phoneNumber;

    public function getPhoneCode(): string
    {
        return $this->phoneCode;
    }

    public function setPhoneCode(string $phoneCode): void
    {
        $this->phoneCode = $phoneCode;
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(string $phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }

    public function getPreferredGateway(): ?string
    {
        return null;
    }

    public function getLastUsedGateway(): ?string
    {
        return null;
    }

    public function setLastUsedGateway(?string $lastUsedGateway): void
    {
    }
}
