<?php

namespace App\Entity\Cases\Data\DTO;

use JMS\Serializer\Annotation as JMS;

class CaseDataMapDTO
{
    /**
     * @JMS\Expose()
     * @JMS\SerializedName("id")
     */
    public int $id;

    /**
     * @JMS\Expose()
     * @JMS\SerializedName("rid")
     */
    public string $rsid;

    /**
     * @JMS\Expose()
     * @JMS\SerializedName("ctn")
     */
    public string $contactName;

    /**
     * @JMS\Expose()
     * @JMS\SerializedName("ctt")
     */
    public string $contactType;

    /**
     * @JMS\Expose()
     * @JMS\SerializedName("lat")
     */
    public float $latitude;

    /**
     * @JMS\Expose()
     * @JMS\SerializedName("lon")
     */
    public float $longitude;

    /**
     * @JMS\Expose()
     * @JMS\SerializedName("latO")
     */
    public float $latitudeONA;

    /**
     * @JMS\Expose()
     * @JMS\SerializedName("lonO")
     */
    public float $longitudeONA;

    /**
     * @JMS\Expose()
     * @JMS\SerializedName("irl")
     */
    public string $investigationResultLegendValue;
}
