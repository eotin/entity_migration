<?php

namespace App\Entity\Export\Excel;

use App\Entity\Calendar\CalendarType;
use App\Entity\Core\Site;

class IndicatorExcelDTO
{
    private string $title;

    /**
     * @var Site
     */
    private $site;

    /**
     * @var CalendarType
     */
    private $calendarType;

    /**
     * @var \DateTime
     */
    private $dateFrom;

    /**
     * @var \DateTime
     */
    private $dateTo;

    private string $fileName;

    /**
     * @var IndicatorHeaderExcelDTO
     */
    private $indicatorHeaderExcelDTO;

    /**
     * @var IndicatorDataRowExcelDTO[]
     */
    private array $indicatorDataRowExcelDTOs;

    public function __construct()
    {
        $this->indicatorDataRowExcelDTOs = [];
    }

    public function addIndicatorDataRowExcelDTO(IndicatorDataRowExcelDTO $indicatorDataRowExcelDTO): void
    {
        $this->indicatorDataRowExcelDTOs[] = $indicatorDataRowExcelDTO;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getSite(): Site
    {
        return $this->site;
    }

    public function setSite(Site $site): void
    {
        $this->site = $site;
    }

    public function getCalendarType(): CalendarType
    {
        return $this->calendarType;
    }

    public function setCalendarType(CalendarType $calendarType): void
    {
        $this->calendarType = $calendarType;
    }

    public function getDateFrom(): \DateTime
    {
        return $this->dateFrom;
    }

    public function setDateFrom(\DateTime $dateFrom): void
    {
        $this->dateFrom = $dateFrom;
    }

    public function getDateTo(): \DateTime
    {
        return $this->dateTo;
    }

    public function setDateTo(\DateTime $dateTo): void
    {
        $this->dateTo = $dateTo;
    }

    public function getFileName(): string
    {
        return $this->fileName;
    }

    public function setFileName(string $fileName): void
    {
        $this->fileName = $fileName;
    }

    public function getIndicatorHeaderExcelDTO(): IndicatorHeaderExcelDTO
    {
        return $this->indicatorHeaderExcelDTO;
    }

    public function setIndicatorHeaderExcelDTO(IndicatorHeaderExcelDTO $indicatorHeaderExcelDTO): void
    {
        $this->indicatorHeaderExcelDTO = $indicatorHeaderExcelDTO;
    }

    /**
     * @return IndicatorDataRowExcelDTO[]
     */
    public function getIndicatorDataRowExcelDTOs(): array
    {
        return $this->indicatorDataRowExcelDTOs;
    }

    /**
     * @param IndicatorDataRowExcelDTO[] $indicatorDataRowExcelDTOs
     */
    public function setIndicatorDataRowExcelDTOs(array $indicatorDataRowExcelDTOs): void
    {
        $this->indicatorDataRowExcelDTOs = $indicatorDataRowExcelDTOs;
    }
}
