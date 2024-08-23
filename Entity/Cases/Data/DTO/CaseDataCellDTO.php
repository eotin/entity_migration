<?php

namespace App\Entity\Cases\Data\DTO;

use JMS\Serializer\Annotation as JMS;

class CaseDataCellDTO
{
    /**
     * @var mixed
     * @JMS\Expose()
     * @JMS\SerializedName("val")
     */
    public $value;

    /**
     * @var mixed
     * @JMS\Expose()
     * @JMS\SerializedName("ova")
     */
    public $originalValue;

    /**
     * @var bool
     * @JMS\Expose()
     * @JMS\SerializedName("upd")
     */
    public ?bool $valueUpdated = null;
}
