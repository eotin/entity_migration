<?php

namespace App\Entity\Security\DTO;

use App\Entity\CollectionDTOInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class InvestigatorCollectionDTO.
 *
 * @JMS\XmlRoot(name="users")
 */
class UserCollectionDTO implements CollectionDTOInterface
{
    /**
     * @JMS\XmlList(entry="user", inline=true)
     * @JMS\Type("array<App\Entity\Security\DTO\UserDTO>")
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
