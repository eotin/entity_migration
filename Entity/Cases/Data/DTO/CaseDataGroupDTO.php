<?php

namespace App\Entity\Cases\Data\DTO;

use JMS\Serializer\Annotation as JMS;

class CaseDataGroupDTO
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
     * @var ?string
     * @JMS\Expose()
     * @JMS\SerializedName("ico")
     */
    public ?string $icon;

    /**
     * @var ?string
     * @JMS\Expose()
     * @JMS\SerializedName("sco")
     */
    public ?string $sourceIcon;

    /**
     * @var bool
     * @JMS\Expose()
     * @JMS\SerializedName("hid")
     */
    public ?bool $hideIfAllFieldsEmpty = false;

    /**
     * @JMS\Expose()
     * @JMS\SerializedName("dsc")
     */
    public string $description;

    /**
     * @JMS\Expose()
     * @JMS\SerializedName("dsp")
     */
    public string $displayType;

    /**
     * @var CaseDataColumnDTO[]
     * @JMS\Expose()
     * @JMS\SerializedName("col")
     */
    public ?array $cols = null;

    public function addColumn(CaseDataColumnDTO $col): void
    {
        if ($this->cols === null) {
            $this->cols = [];
        }

        $this->cols[] = $col;
    }

    /**
     *
     * @param CaseDataColumnDTO $col
     * @return bool
     */
    public function containsColumn(CaseDataColumnDTO $col): bool
    {
        if ($this->cols === null) {
            return false;
        }

        foreach ($this->cols as $existingCol) {
            if ($existingCol->id === $col->id) {
                return true;
            }
        }

        return false;
    }
}
