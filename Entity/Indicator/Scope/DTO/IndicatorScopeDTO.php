<?php

namespace App\Entity\Indicator\Scope\DTO;

use JMS\Serializer\Annotation as JMS;

class IndicatorScopeDTO
{
    /**
     * @JMS\Expose()
     * @JMS\SerializedName("id")
     *
     * @var int
     */
    public $id;

    /**
     * @JMS\Expose()
     * @JMS\SerializedName("n")
     */
    public string $name;

    /**
     * @JMS\Expose()
     * @JMS\SerializedName("dis")
     */
    public bool $alwaysDisplayInCollapsableGroup = false;

    /**
     * @JMS\Expose()
     * @JMS\SerializedName("dsc")
     */
    public string $description;

    /**
     * Date type code.
     *
     * @JMS\Expose()
     * @JMS\SerializedName("dtc")
     */
    public string $indicatorDataTypeCode;
}
