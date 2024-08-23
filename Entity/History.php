<?php

namespace App\Entity;

use App\Entity\Calendar\Calendar;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Contact.
 *
 * @ORM\InheritanceType("TABLE_PER_CLASS")
 */
abstract class History
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Calendar\Calendar")
     * @ORM\JoinColumn(name="FK_dateFromId", referencedColumnName="id")
     */
    protected $dateFrom;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Calendar\Calendar")
     * @ORM\JoinColumn(name="FK_dateToId", referencedColumnName="id")
     */
    protected $dateTo;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Calendar\Calendar")
     * @ORM\JoinColumn(name="FK_weekDateFromId", referencedColumnName="id")
     */
    protected $weekDateFrom;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Calendar\Calendar")
     * @ORM\JoinColumn(name="FK_weekDateToId", referencedColumnName="id")
     */
    protected $weekDateTo;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Calendar\Calendar")
     * @ORM\JoinColumn(name="FK_monthDateFromId", referencedColumnName="id")
     */
    protected $monthDateFrom;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Calendar\Calendar")
     * @ORM\JoinColumn(name="FK_monthDateToId", referencedColumnName="id")
     */
    protected $monthDateTo;

    /**
     * @return Calendar|null
     */
    public function getDateFrom()
    {
        return $this->dateFrom;
    }

    /**
     * @param Calendar|null $dateFrom
     */
    public function setDateFrom($dateFrom): void
    {
        $this->dateFrom = $dateFrom;
    }

    /**
     * @return Calendar|null
     */
    public function getDateTo()
    {
        return $this->dateTo;
    }

    /**
     * @param Calendar|null $dateTo
     */
    public function setDateTo($dateTo): void
    {
        $this->dateTo = $dateTo;
    }

    /**
     * @return Calendar|null
     */
    public function getWeekDateFrom()
    {
        return $this->weekDateFrom;
    }

    /**
     * @param Calendar|null $weekDateFrom
     */
    public function setWeekDateFrom($weekDateFrom): void
    {
        $this->weekDateFrom = $weekDateFrom;
    }

    /**
     * @return Calendar|null
     */
    public function getWeekDateTo()
    {
        return $this->weekDateTo;
    }

    /**
     * @param Calendar|null $weekDateTo
     */
    public function setWeekDateTo($weekDateTo): void
    {
        $this->weekDateTo = $weekDateTo;
    }

    /**
     * @return Calendar|null
     */
    public function getMonthDateFrom()
    {
        return $this->monthDateFrom;
    }

    /**
     * @param Calendar|null $monthDateFrom
     */
    public function setMonthDateFrom($monthDateFrom): void
    {
        $this->monthDateFrom = $monthDateFrom;
    }

    /**
     * @return Calendar|null
     */
    public function getMonthDateTo()
    {
        return $this->monthDateTo;
    }

    /**
     * @param Calendar|null $monthDateTo
     */
    public function setMonthDateTo($monthDateTo): void
    {
        $this->monthDateTo = $monthDateTo;
    }

    /**
     * Is relation enabled ?
     */
    public function getEnabled(): bool
    {
        return $this->dateTo == null;
    }
}
