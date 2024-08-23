<?php

namespace App\Entity\Disease;

use App\Entity\Traits\IdentifierAutogeneratedTrait;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\PersistentCollection;
use Gedmo\Timestampable\Traits\TimestampableEntity;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Disease.
 *
 * @ORM\Entity(repositoryClass="App\Repository\Disease\DiseaseRepository")
 *
 * @UniqueEntity(fields="name", message="This name already exists")
 * @UniqueEntity(fields="code", message="This code already exists")
 * @UniqueEntity(fields="mobileCode", message="This mobile code already exists")
 * @UniqueEntity(fields="color", message="This color is already used")
 * @UniqueEntity(fields="sortOrder", message="This order is already used")
 */
class Disease
{
    use TimestampableEntity;
    use IdentifierAutogeneratedTrait;

    /**
     * @ORM\Column(type="string", nullable=false, unique=true)
     */
    private string $name;

    /**
     * @ORM\Column(type="string", nullable=false, unique=true)
     */
    private string $code;

    /**
     * @ORM\Column(type="string", nullable=false, unique=true)
     * @Assert\Length(min="3", max="3")
     */
    private string $mobileCode;

    /**
     * @ORM\Column(type="string", nullable=false, unique=true)
     */
    protected string $color;

    /**
     * @ORM\Column(type="integer", nullable=false, unique=true)
     * @Assert\GreaterThanOrEqual(value="0")
     */
    protected int $sortOrder;

    /**
     * @var DiseaseSite[]
     * @ORM\OneToMany (targetEntity="DiseaseSite", mappedBy="disease")
     */
    private PersistentCollection $diseaseSites;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    public function getMobileCode(): string
    {
        return strtolower($this->mobileCode);
    }

    public function setMobileCode(string $mobileCode): void
    {
        $this->mobileCode = strtolower($mobileCode);
    }

    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getSortOrder(): int
    {
        return $this->sortOrder;
    }

    public function setSortOrder(int $sortOrder): void
    {
        $this->sortOrder = $sortOrder;
    }

    public function __toString(): string
    {
        return $this->getName().' ('.$this->getCode().')';
    }
}
