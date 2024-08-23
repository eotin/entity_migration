<?php

namespace App\Entity\Indicator\Scope\DTO;

use JMS\Serializer\Annotation as JMS;

class IndicatorScopeGroupDTO
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
     * @JMS\SerializedName("clp")
     */
    public bool $collapsable = false;

    /**
     * @JMS\Expose()
     * @JMS\SerializedName("dsc")
     */
    public string $description;

    /**
     * Parent.
     *
     * @JMS\Expose()
     * @JMS\SerializedName("par")
     *
     * @var IndicatorScopeDTO[]
     */
    public $parent = [];

    /**
     * Children.
     *
     * @JMS\Expose()
     * @JMS\SerializedName("chi")
     *
     * @var IndicatorScopeDTO[]
     */
    public $children = [];

    public function addParentScope(IndicatorScopeDTO $scope)
    {
        $this->parent[] = $scope;
    }

    public function addChildScope(IndicatorScopeDTO $scope)
    {
        $this->children[] = $scope;
    }
}
