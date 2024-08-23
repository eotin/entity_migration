<?php

namespace App\Entity\Cases\Data\DTO;

use JMS\Serializer\Annotation as JMS;

class CaseDataRowDTO
{
    /**
     * @JMS\Expose()
     * @JMS\SerializedName("id")
     */
    public int $id;

    /**
     * @var ?string
     * @JMS\Expose()
     * @JMS\SerializedName("sid")
     */
    public ?string $submissionId = null;

    /**
     * @JMS\Expose()
     * @JMS\SerializedName("dis")
     */
    public bool $disabled;

    /**
     * @JMS\Expose()
     * @JMS\SerializedName("del")
     */
    public bool $deleted;

    /**
     * @JMS\Expose()
     * @JMS\SerializedName("upd")
     */
    public bool $updated;

    /**
     * @var ?string
     * @JMS\Expose()
     * @JMS\SerializedName("by")
     */
    public ?string $updatedBy = null;

    /**
     * @var ?\DateTime
     * @JMS\Expose()
     * @JMS\SerializedName("whn")
     */
    public ?\DateTime $updatedDate = null;

    /**
     * @JMS\Expose()
     * @JMS\SerializedName("did")
     */
    public ?int $diseaseId = null;

    /**
     * Use for Excel Export.
     */
    public ?string $diseaseName = null;

    /**
     * @var ?float
     * @JMS\Expose()
     * @JMS\SerializedName("lat")
     */
    public ?float $latitude = null;

    /**
     * @var ?float
     * @JMS\Expose()
     * @JMS\SerializedName("lon")
     */
    public ?float $longitude = null;

    /**
     * @var ?float
     * @JMS\Expose()
     * @JMS\SerializedName("latO")
     */
    public ?float $latitudeOna = null;

    /**
     * @var ?float
     * @JMS\Expose()
     * @JMS\SerializedName("lonO")
     */
    public ?float $longitudeOna = null;

    /**
     * @var ?string
     * @JMS\Expose()
     * @JMS\SerializedName("ctn")
     */
    public ?string $contactName = null;

    /**
     * @JMS\Expose()
     * @JMS\SerializedName("irl")
     */
    public ?string $investigationResult = null;

    /**
     * @var CaseDataCellDTO[]
     * @JMS\Expose()
     * @JMS\SerializedName("cel")
     */
    public ?array $cells = null;

    public function addCell(CaseDataCellDTO $cell): void
    {
        if ($this->cells === null) {
            $this->cells = [];
        }

        $this->cells[] = $cell;
    }
}
