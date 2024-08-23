<?php

namespace App\Entity\Security\DTO;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\ExclusionPolicy("all")
 */
class RoleDTO
{
    /**
     * @JMS\Type("string")
     * @JMS\Expose
     */
    public string $role;
}
