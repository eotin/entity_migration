<?php

namespace App\Entity\Export\Excel;

class IndicatorDataRowExcelDTO
{
    private int $siteId;

    private string $siteName;

    private ?int $informantId = null;

    private ?string $informantName = null;

    private int $siteLevel;

    private string $sitePath;

    /**
     * @var string[]
     */
    private array $sitePathArray;

    /**
     * @var IndicatorDataCellExcelDTO[]
     */
    private array $indicatorDataCellExcelDTOs;

    public function __construct()
    {
        $this->indicatorDataCellExcelDTOs = [];
    }

    public function addIndicatorDataCellExcelDTO(IndicatorDataCellExcelDTO $indicatorDataCellExcelDTO): void
    {
        $this->indicatorDataCellExcelDTOs[] = $indicatorDataCellExcelDTO;
    }

    public function getNumberOfIndicatorDataCellExcelDTO(): int
    {
        return count($this->indicatorDataCellExcelDTOs);
    }

    public function getSiteId(): int
    {
        return $this->siteId;
    }

    public function setSiteId(int $siteId): void
    {
        $this->siteId = $siteId;
    }

    public function getSiteName(): string
    {
        return $this->siteName;
    }

    public function setSiteName(string $siteName): void
    {
        $this->siteName = $siteName;
    }

    public function getInformantId(): ?int
    {
        return $this->informantId;
    }

    public function setInformantId(?int $informantId): void
    {
        $this->informantId = $informantId;
    }

    public function getInformantName(): ?string
    {
        return $this->informantName;
    }

    public function setInformantName(?string $informantName): void
    {
        $this->informantName = $informantName;
    }

    public function getSiteLevel(): int
    {
        return $this->siteLevel;
    }

    public function setSiteLevel(int $siteLevel): void
    {
        $this->siteLevel = $siteLevel;
    }

    public function getSitePath(): string
    {
        return $this->sitePath;
    }

    public function setSitePath(string $sitePath): void
    {
        $this->sitePath = $sitePath;
    }

    /**
     * @return string[]
     */
    public function getSitePathArray(): array
    {
        return $this->sitePathArray;
    }

    /**
     * @param string[] $sitePathArray
     */
    public function setSitePathArray(array $sitePathArray): void
    {
        $this->sitePathArray = $sitePathArray;
    }

    /**
     * @return IndicatorDataCellExcelDTO[]
     */
    public function getIndicatorDataCellExcelDTOs(): array
    {
        return $this->indicatorDataCellExcelDTOs;
    }

    /**
     * @param IndicatorDataCellExcelDTO[] $indicatorDataCellExcelDTOs
     */
    public function setIndicatorDataCellExcelDTOs(array $indicatorDataCellExcelDTOs): void
    {
        $this->indicatorDataCellExcelDTOs = $indicatorDataCellExcelDTOs;
    }
}
