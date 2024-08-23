<?php

namespace App\Entity\Calendar;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Calendar\CalendarRepository")
 * @ORM\Table(uniqueConstraints={@ORM\UniqueConstraint(name="calendar_udx", columns={"id"})},
 *   indexes={
 *    @ORM\Index(columns={"month_period_code"}),
 *    @ORM\Index(columns={"week_period_code"}),
 *    @ORM\Index(columns={"epi_week_period_code"})
 *   }
 * )
 */
class Calendar
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     */
    private int $id;

    /**
     * @ORM\Column(type="date")
     */
    private \DateTime $fullDate;

    /**
     * @ORM\Column(type="text", length=11)
     */
    private string $dateName;

    /**
     * @ORM\Column(type="integer")
     */
    private int $dayOfWeek;

    /**
     * @ORM\Column(type="text", length=10)
     */
    private string $dayNameOfWeek;

    /**
     * @ORM\Column(type="integer")
     */
    private int $dayOfMonth;

    /**
     * @ORM\Column(type="integer")
     */
    private int $dayOfYear;

    /**
     * @ORM\Column(type="integer")
     */
    private int $weekOfYear;

    /**
     * @ORM\Column(type="integer")
     */
    private int $weekYear;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $epiYear;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $epiWeekOfYear;

    /**
     * @ORM\Column(type="text", length=10)
     */
    private string $monthName;

    /**
     * @ORM\Column(type="integer")
     */
    private int $monthOfYear;

    /**
     * @ORM\Column(type="integer")
     */
    private int $calendarYear;

    /**
     * @ORM\Column(type="string", length=7, nullable=true)
     */
    private ?string $monthPeriodCode;

    /**
     * @ORM\Column(type="string", length=7, nullable=true)
     */
    private ?string $weekPeriodCode;

    /**
     * @ORM\Column(type="string", length=7, nullable=true)
     */
    private ?string $epiWeekPeriodCode;

    public function __construct()
    {
    }

    /**
     * @param $dimDateTypeCode
     *
     * @return int|mixed|null
     */
    public function getPeriodCode($dimDateTypeCode)
    {
        switch ($dimDateTypeCode) {
            case CalendarType::CODE_WEEKLY:
                return $this->getWeekPeriodCode();
            case CalendarType::CODE_WEEKLY_EPIDEMIOLOGIC:
                return $this->getEpiWeekPeriodCode();
            case CalendarType::CODE_MONTHLY:
                return $this->getMonthPeriodCode();
            case CalendarType::CODE_YEARLY:
                return $this->getCalendarYear();
            default:
                return null;
        }
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getFullDate(): \DateTime
    {
        return $this->fullDate;
    }

    public function setFullDate(\DateTime $fullDate): void
    {
        $this->fullDate = $fullDate;
    }

    public function getDateName(): string
    {
        return $this->dateName;
    }

    public function setDateName(string $dateName): void
    {
        $this->dateName = $dateName;
    }

    public function getDayOfWeek(): int
    {
        return $this->dayOfWeek;
    }

    public function setDayOfWeek(int $dayOfWeek): void
    {
        $this->dayOfWeek = $dayOfWeek;
    }

    public function getDayNameOfWeek(): string
    {
        return $this->dayNameOfWeek;
    }

    public function setDayNameOfWeek(string $dayNameOfWeek): void
    {
        $this->dayNameOfWeek = $dayNameOfWeek;
    }

    public function getDayOfMonth(): int
    {
        return $this->dayOfMonth;
    }

    public function setDayOfMonth(int $dayOfMonth): void
    {
        $this->dayOfMonth = $dayOfMonth;
    }

    public function getDayOfYear(): int
    {
        return $this->dayOfYear;
    }

    public function setDayOfYear(int $dayOfYear): void
    {
        $this->dayOfYear = $dayOfYear;
    }

    public function getWeekOfYear(): int
    {
        return $this->weekOfYear;
    }

    public function setWeekOfYear(int $weekOfYear): void
    {
        $this->weekOfYear = $weekOfYear;
    }

    public function getWeekYear(): int
    {
        return $this->weekYear;
    }

    public function setWeekYear(int $weekYear): void
    {
        $this->weekYear = $weekYear;
    }

    public function getEpiYear(): ?int
    {
        return $this->epiYear;
    }

    public function setEpiYear(?int $epiYear): void
    {
        $this->epiYear = $epiYear;
    }

    public function getEpiWeekOfYear(): ?int
    {
        return $this->epiWeekOfYear;
    }

    public function setEpiWeekOfYear(?int $epiWeekOfYear): void
    {
        $this->epiWeekOfYear = $epiWeekOfYear;
    }

    public function getMonthName(): string
    {
        return $this->monthName;
    }

    public function setMonthName(string $monthName): void
    {
        $this->monthName = $monthName;
    }

    public function getMonthOfYear(): int
    {
        return $this->monthOfYear;
    }

    public function setMonthOfYear(int $monthOfYear): void
    {
        $this->monthOfYear = $monthOfYear;
    }

    public function getCalendarYear(): int
    {
        return $this->calendarYear;
    }

    public function setCalendarYear(int $calendarYear): void
    {
        $this->calendarYear = $calendarYear;
    }

    public function getMonthPeriodCode(): ?string
    {
        return $this->monthPeriodCode;
    }

    public function setMonthPeriodCode(?string $monthPeriodCode): void
    {
        $this->monthPeriodCode = $monthPeriodCode;
    }

    public function getWeekPeriodCode(): ?string
    {
        return $this->weekPeriodCode;
    }

    public function setWeekPeriodCode(?string $weekPeriodCode): void
    {
        $this->weekPeriodCode = $weekPeriodCode;
    }

    public function getEpiWeekPeriodCode(): ?string
    {
        return $this->epiWeekPeriodCode;
    }

    public function setEpiWeekPeriodCode(?string $epiWeekPeriodCode): void
    {
        $this->epiWeekPeriodCode = $epiWeekPeriodCode;
    }
}
