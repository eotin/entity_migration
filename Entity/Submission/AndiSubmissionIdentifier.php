<?php

namespace App\Entity\Submission;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class SubmissionIdentifier.
 *
 * @ORM\Entity(repositoryClass="App\Repository\Submission\SubmissionIdentifierRepository")
 * @ORM\Table(name="submission_identifier")
 */
class AndiSubmissionIdentifier
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private int $weekCalendarId;

    /**
     * @ORM\Column(type="integer")
     */
    private int $year;

    /**
     * @ORM\Column(type="integer")
     */
    private int $week;

    /**
     * @ORM\Column(type="integer")
     */
    private int $counter;

    public function getWeekCalendarId(): int
    {
        return $this->weekCalendarId;
    }

    public function setWeekCalendarId(int $weekCalendarId): void
    {
        $this->weekCalendarId = $weekCalendarId;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function setYear(int $year): void
    {
        $this->year = $year;
    }

    public function getWeek(): int
    {
        return $this->week;
    }

    public function setWeek(int $week): void
    {
        $this->week = $week;
    }

    public function getCounter(): int
    {
        return $this->counter;
    }

    public function setCounter(int $counter): void
    {
        $this->counter = $counter;
    }
}
