<?php

namespace App\Entity\Calendar;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Calendar\CalendarTypeRepository")
 */
class CalendarType
{
    public const CODE_DAILY = [1, 'Daily', 'Daily', 'Daily period'];
    public const CODE_WEEKLY = [2, 'Weekly', 'Weekly', 'Weekly period'];
    public const CODE_WEEKLY_EPIDEMIOLOGIC = [3, 'WeeklyEpidemiologic', 'Weekly', 'Epidemiologic week period'];
    public const CODE_MONTHLY = [4, 'Monthly', 'Monthly', 'Monthly period'];
    public const CODE_YEARLY = [5, 'Yearly', 'Yearly', 'Yearly period'];
    public const CODE_CUSTOM = [6, 'Custom', 'Custom', 'Custom period'];

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected int $id;

    /**
     * @ORM\Column(type="string")
     */
    private string $code;

    /**
     * @ORM\Column(type="string")
     */
    private string $name;

    /**
     * @ORM\Column(type="string")
     */
    private string $description;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDesc(): string
    {
        return $this->description;
    }

    public function setDesc(string $description): void
    {
        $this->description = $description;
    }
}
