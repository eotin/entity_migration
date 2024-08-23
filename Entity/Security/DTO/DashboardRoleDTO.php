<?php

namespace App\Entity\Security\DTO;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\ExclusionPolicy("all")
 * @JMS\XmlRoot("role")
 */
class DashboardRoleDTO
{
    /**
     * @JMS\Expose
     */
    public string $name;

    /**
     * @JMS\Expose
     */
    public string $code;

    /**
     * @JMS\Expose
     * @JMS\XmlList(entry="permission")
     * @JMS\Type("array<App\Entity\Security\DTO\PermissionDTO>")
     */
    public ?array $permissions = null;
}
