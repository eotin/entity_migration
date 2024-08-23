<?php

namespace App\Entity\Cases\Data\DTO;

use JMS\Serializer\Annotation as JMS;

class CaseDataTabDTO
{
    /**
     * @JMS\Expose()
     * @JMS\SerializedName("id")
     */
    public int $id;

    /**
     * @var ?string
     * @JMS\Expose()
     * @JMS\SerializedName("n")
     */
    public ?string $name = null;

    /**
     * Use for Excel Export.
     */
    public ?string $sheetName = null;

    /**
     * @JMS\Expose()
     * @JMS\SerializedName("dsc")
     *
     * @var ?string
     */
    public ?string $description = null;

    /**
     * @JMS\Expose()
     * @JMS\SerializedName("msl")
     *
     * @var ?int
     */
    public ?int $maxSiteLevelFilter = null;

    /**
     * @JMS\Expose()
     * @JMS\SerializedName("esd")
     *
     * @var ?boolean
     */
    public ?bool $enableDisplayDeletedSubmissionCheckboxFilter = null;

    /**
     * @JMS\Expose()
     * @JMS\SerializedName("eoo")
     *
     * @var ?boolean
     */
    public ?bool $enableDisplayOrphanInvestigationsCheckboxFilter = null;

    /**
     * @var CaseDataGroupDTO[]
     * @JMS\Expose()
     * @JMS\SerializedName("grs")
     */
    public ?array $groups = null;

    /**
     * @var ?int
     * @JMS\Expose()
     * @JMS\SerializedName("ds")
     */
    public ?int $dataSize = null;

    /**
     * @var ?int
     * @JMS\Expose()
     * @JMS\SerializedName("ads")
     */
    public ?int $actualDataSize = null;

    /**
     * @var CaseDataRowDTO[]
     * @JMS\Expose()
     * @JMS\SerializedName("d")
     */
    public ?array $data = null;

    public function addGroup(CaseDataGroupDTO $groupDTO): void
    {
        if ($this->groups === null) {
            $this->groups = [];
        }

        $this->groups[] = $groupDTO;
    }

    public function addData(CaseDataRowDTO $row): void
    {
        if ($this->data === null) {
            $this->data = [];
        }

        $this->data[] = $row;
    }
}
