<?php

namespace App\Entity\Core\DTO;

use App\Entity\Core\Informant;
use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\ExclusionPolicy("all")
 */
class InformantDTO implements ContactDTOInterface
{
    public function __construct(Informant $informant)
    {
        $this->name = $informant->getName();
        $this->phoneNumber = $informant->getPhoneNumber();
        $this->reference = $informant->getReference();
        $this->siteReference = $informant->getSite() !== null ? $informant->getSite()->getReference() : null;
        $this->imei = $informant->getImei();
        $this->imei2 = $informant->getImei2();
        $this->enabled = $informant->getEnabled();
        $this->email = $informant->getEmail();
        $this->note = $informant->getNote();
        $this->contactTypeReference = $informant->getType() !== null ? $informant->getType()->getCode() : null;
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function getContactTypeReference(): ?string
    {
        return $this->contactTypeReference;
    }

    public function getSiteReference(): ?string
    {
        return $this->siteReference;
    }

    public function getEnabled(): bool
    {
        return $this->enabled;
    }

    /**
     * @JMS\Expose
     * @JMS\Type("string")
     */
    public ?string $name = null;

    /**
     * @var string|null
     *
     * @JMS\Expose
     * @JMS\Type("string")
     */
    public string $phoneNumber;

    /**
     * @JMS\Expose
     * @JMS\Type("string")
     */
    public ?string $reference = null;

    /**
     * @var string|null
     *
     * @JMS\Expose
     * @JMS\Type("string")
     */
    public string $siteReference;

    /**
     * @JMS\Expose
     * @JMS\Type("string")
     */
    public ?string $imei = null;

    /**
     * @JMS\Expose
     * @JMS\Type("string")
     */
    public ?string $imei2 = null;

    /**
     * @JMS\Expose
     * @JMS\Type("boolean")
     */
    public bool $enabled;

    /**
     * @JMS\Expose
     * @JMS\Type("string")
     */
    public ?string $email = null;

    /**
     * @JMS\Expose
     * @JMS\Type("string")
     */
    public ?string $note = null;

    /**
     * @JMS\Expose
     * @JMS\Type("string")
     */
    public ?string $contactTypeReference = null;
}
