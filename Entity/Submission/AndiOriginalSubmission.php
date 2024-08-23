<?php

namespace App\Entity\Submission;

use App\Entity\AbstractJsonReadableEntity;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Blameable\Traits\BlameableEntity;
use Gedmo\Timestampable\Traits\TimestampableEntity;

/**
 * Some attributes are public as the method getValueForProperty is doing reflexion.
 *
 * @ORM\Entity(repositoryClass="App\Repository\Submission\AndiOriginalSubmissionRepository")
 * @ORM\Table(
 *   name="submission_original")
 */
class AndiOriginalSubmission extends AbstractJsonReadableEntity
{
    use TimestampableEntity;
    use BlameableEntity;

    /**
     * No auto increment value, as we want ot have same id as AndiSubmission.
     *
     * @ORM\Id
     * @ORM\Column(type="integer", nullable=false)
     */
    protected int $id;

    /**
     * @ORM\Column(type="datetime")
     */
    public \DateTime $collectionDate;

    /**
     * @ORM\Column(type="integer")
     */
    private int $weekCalendarId;

    /**
     * @ORM\Column(type="integer")
     */
    private int $dayCalendarId;

    /**
     * @var ?float
     * @ORM\Column(type="decimal", precision=10, scale=8, nullable=true)
     */
    private ?float $latitude;

    /**
     * @var ?float
     * @ORM\Column(type="decimal", precision=11, scale=8, nullable=true)
     */
    private ?float $longitude;

    /**
     * @var ?array
     * @ORM\Column(type="json", nullable=true)
     */
    private ?array $jsonData;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getCollectionDate(): \DateTime
    {
        return $this->collectionDate;
    }

    public function setCollectionDate(\DateTime $collectionDate): void
    {
        $this->collectionDate = $collectionDate;
    }

    public function getWeekCalendarId(): int
    {
        return $this->weekCalendarId;
    }

    public function setWeekCalendarId(int $weekCalendarId): void
    {
        $this->weekCalendarId = $weekCalendarId;
    }

    public function getDayCalendarId(): int
    {
        return $this->dayCalendarId;
    }

    public function setDayCalendarId(int $dayCalendarId): void
    {
        $this->dayCalendarId = $dayCalendarId;
    }

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(?float $latitude): void
    {
        $this->latitude = $latitude;
    }

    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    public function setLongitude(?float $longitude): void
    {
        $this->longitude = $longitude;
    }

    /**
     * @return ?array
     */
    public function getJsonData(): ?array
    {
        return $this->jsonData;
    }

    /**
     * @param ?array $jsonData
     */
    public function setJsonData(?array $jsonData): void
    {
        $this->jsonData = $jsonData;
    }
}
