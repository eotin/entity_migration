<?php

namespace App\Entity\Core\DTO;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\ExclusionPolicy("all")
 */
class InvestigatorDTO implements ContactDTOInterface
{
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
     * @var string|null
     *
     * @JMS\Expose
     * @JMS\Type("string")
     */
    public string $imei;

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
