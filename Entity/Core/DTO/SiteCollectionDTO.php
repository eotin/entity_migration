<?php

namespace App\Entity\Core\DTO;

use App\Entity\CollectionDTOInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class SiteCollectionDTO.
 *
 * @JMS\XmlRoot(name="sites")
 */
class SiteCollectionDTO implements CollectionDTOInterface
{
    /**
     * @JMS\XmlList(entry="site", inline=true)
     * @JMS\Type("array<App\Entity\Core\DTO\SiteDTO>")
     */
    private array $elements;

    public function __construct(array $elements)
    {
        $this->elements = $elements;
    }

    public function getElements(): array
    {
        return $this->elements;
    }

    public function setElements(array $elements): void
    {
        $this->elements = $elements;
    }
}
