<?php

namespace App\Entity\Core\DTO;

use App\Entity\Core\Site;
use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\ExclusionPolicy("all")
 */
class SiteDTO
{
    public function __construct(Site $site)
    {
        $this->name = $site->getName();
        $this->reference = $site->getReference();
        $this->parentSiteReference = $site->getParent() !== null ? $site->getParent()->getReference() : null;
        $this->enabled = $site->getEnabled();
        $this->weeklyTimelinessMinutes = $site->getWeeklyTimelinessMinutes();
    }

    /**
     * @JMS\Expose
     * @JMS\Type("string")
     */
    public ?string $name = null;

    /**
     * @JMS\Expose
     * @JMS\Type("string")
     */
    public string $reference;

    /**
     * @JMS\Expose
     * @JMS\Type("string")
     */
    public ?string $parentSiteReference = null;

    /**
     * @var ?int
     *
     * @JMS\Expose
     * @JMS\Type("integer")
     */
    public ?int $weeklyTimelinessMinutes = null;

    /**
     * @JMS\Expose
     * @JMS\Type("boolean")
     */
    public bool $enabled = true;
}
