<?php

namespace App\Entity\Export\Excel;

class IndicatorHeaderExcelDTO
{
    /**
     * @var int[]
     */
    private array $siteLevels;

    /**
     * @var IndicatorScopeExcelDTO[]
     */
    private array $indicatorScopeExcelDTOs;

    public function __construct()
    {
        $this->indicatorScopeExcelDTOs = [];
        $this->siteLevels = [];
    }

    /**
     * @return int
     */
    public function getNumberOfSiteLevels()
    {
        return sizeof($this->siteLevels);
    }

    /**
     * @return int[]
     */
    public function getScopeIds()
    {
        $scopeIds = [];

        /** @var IndicatorScopeExcelDTO $excelDTO */
        foreach ($this->indicatorScopeExcelDTOs as $excelDTO) {
            $scopeIds[] = $excelDTO->getScopeId();
        }

        return $scopeIds;
    }

    /**
     * @return int[]
     */
    public function getSiteLevels(): array
    {
        return $this->siteLevels;
    }

    /**
     * @param int[] $siteLevels
     */
    public function setSiteLevels(array $siteLevels): void
    {
        $this->siteLevels = $siteLevels;
    }

    /**
     * @return IndicatorScopeExcelDTO[]
     */
    public function getIndicatorScopeExcelDTOs(): array
    {
        return $this->indicatorScopeExcelDTOs;
    }

    /**
     * @param IndicatorScopeExcelDTO[] $indicatorScopeExcelDTOs
     */
    public function setIndicatorScopeExcelDTOs(array $indicatorScopeExcelDTOs): void
    {
        $this->indicatorScopeExcelDTOs = $indicatorScopeExcelDTOs;
    }
}
