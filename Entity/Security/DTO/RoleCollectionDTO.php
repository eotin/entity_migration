<?php

namespace App\Entity\Security\DTO;

use App\Entity\CollectionDTOInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class RoleCollectionDTO.
 *
 * @JMS\XmlRoot(name="roles")
 */
class RoleCollectionDTO implements CollectionDTOInterface
{
    /**
     * @JMS\XmlList(entry="role", inline=true)
     * @JMS\Type("array<App\Entity\Security\DTO\DashboardRoleDTO>")
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
