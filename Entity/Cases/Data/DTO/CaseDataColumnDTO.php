<?php

namespace App\Entity\Cases\Data\DTO;

use JMS\Serializer\Annotation as JMS;

class CaseDataColumnDTO
{
    /**
     * @JMS\Expose()
     * @JMS\SerializedName("id")
     */
    public int $id;

    /**
     * @JMS\Expose()
     * @JMS\SerializedName("ed")
     */
    public bool $editable = false;

    /**
     * @JMS\Expose()
     * @JMS\SerializedName("ful")
     */
    public bool $dislayInFullMapMode = false;

    /**
     * @JMS\Expose()
     * @JMS\SerializedName("n")
     */
    public string $name;

    /**
     * @JMS\Expose()
     * @JMS\SerializedName("n2")
     */
    public string $name2;

    /**
     * @JMS\Expose()
     * @JMS\SerializedName("dsc")
     */
    public string $description;

    /**
     * @JMS\Expose()
     * @JMS\SerializedName("dtc")
     */
    public string $dataType;
}
