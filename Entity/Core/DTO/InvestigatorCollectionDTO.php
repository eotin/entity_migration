<?php

namespace App\Entity\Core\DTO;

use App\Entity\CollectionDTOInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class InvestigatorCollectionDTO.
 *
 * @JMS\XmlRoot(name="recipients")
 */
class InvestigatorCollectionDTO implements CollectionDTOInterface
{
    /**
     * @JMS\XmlList(entry="recipient", inline=true)
     * @JMS\Type("array<App\Entity\Core\DTO\InvestigatorDTO>")
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
