<?php

namespace App\Entity\Security\DTO;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\ExclusionPolicy("all")
 * @JMS\XmlRoot("permission")
 */
class PermissionDTO
{
    /**
     * @JMS\Expose
     */
    public string $action;

    /**
     * @JMS\Expose
     */
    public string $resource;

    /**
     * @JMS\Expose
     */
    public string $state;

    /**
     * @JMS\Expose
     */
    public string $type;

    /**
     * @JMS\Expose
     */
    public int $level;

    /**
     * @JMS\Expose
     */
    public string $scope;
}
