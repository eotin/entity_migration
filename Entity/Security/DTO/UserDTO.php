<?php

namespace App\Entity\Security\DTO;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\ExclusionPolicy("all")
 */
class UserDTO
{
    /**
     * @JMS\Expose
     * @JMS\Type("string")
     */
    public string $username;

    /**
     * @JMS\Expose
     * @JMS\Type("string")
     */
    public ?string $firstName = null;

    /**
     * @JMS\Expose
     * @JMS\Type("string")
     */
    public ?string $lastName = null;

    /**
     * @var string|null
     *
     * @JMS\Expose
     * @JMS\Type("string")
     */
    public string $siteReference;

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
     * @JMS\XmlList(inline=true, entry="roles")
     * @JMS\Type("array<App\Entity\Security\DTO\RoleDTO>")
     */
    public ?array $roles = null;

    /**
     * @JMS\Expose
     * @JMS\XmlList(entry="role")
     * @JMS\Type("array<App\Entity\Security\DTO\DashboardRoleDTO>")
     */
    public ?array $dashboardRoles = null;
}
