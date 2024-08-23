<?php

namespace App\Entity\Indicator\Scope\DTO;

use JMS\Serializer\Annotation as JMS;

class IndicatorScopeTabDTO
{
    /**
     * @JMS\Expose()
     * @JMS\SerializedName("id")
     */
    public int $id;

    /**
     * @JMS\Expose()
     * @JMS\SerializedName("n")
     */
    public string $name;

    /**
     * @JMS\Expose()
     * @JMS\SerializedName("dsc")
     */
    public string $description;

    /**
     * @JMS\Expose()
     * @JMS\SerializedName("grs")
     *
     * @var IndicatorScopeGroupDTO[]
     */
    public $groups = [];

    public function addGroup(IndicatorScopeGroupDTO $group)
    {
        $this->groups[] = $group;
    }
}
