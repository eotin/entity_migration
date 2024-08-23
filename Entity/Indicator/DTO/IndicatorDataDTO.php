<?php

namespace App\Entity\Indicator\DTO;

use JMS\Serializer\Annotation as JMS;

class IndicatorDataDTO
{
    //properties must be public, otherwise they are not included in the json response
    /**
     * @JMS\Expose()
     * @JMS\SerializedName("val")
     */
    public float $value;

    /**
     * @JMS\Expose()
     * @JMS\SerializedName("num")
     */
    public ?int $numerator = null;

    /**
     * @JMS\Expose()
     * @JMS\SerializedName("den")
     */
    public ?int $denominator = null;

    /**
     * @JMS\Expose()
     * @JMS\SerializedName("sId")
     */
    public int $siteId;

    /**
     * @JMS\Expose()
     * @JMS\SerializedName("iId")
     */
    public ?int $informantId = null;

    /**
     * @JMS\Expose()
     * @JMS\SerializedName("scId")
     */
    public int $indicatorScopeId;

    /**
     * @JMS\Expose()
     * @JMS\SerializedName("clr")
     */
    public ?string $colorRGB = null;
}
