<?php

namespace App\Entity\Indicator;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Indicator\IndicatorRepository")
 *
 * Class Indicator
 */
class Indicator
{
    public const EXPECTED_INFORMANT = [1, 'EXPECTED_INFORMANT', 'Expected Informant', ''];
    public const RECEIVED_INFORMANT = [2, 'RECEIVED_INFORMANT', 'Received Informant', ''];
    public const COMPLETENESS_INFORMANT = [3, 'COMPLETENESS_INFORMANT', 'Completeness Informant', ''];
    public const ON_TIME_RECEIVED_INFORMANT = [4, 'ON_TIME_RECEIVED_INFORMANT', 'On Time Received Informant', ''];
    public const TIMELINESS_INFORMANT = [5, 'TIMELINESS_INFORMANT', 'Timeliness Informant', ''];
    public const RECEIVED_CASE = [6, 'RECEIVED_CASE', 'Number received case', ''];
    public const INVESTIGATED_CASE = [7, 'INVESTIGATED_CASE', 'Number investigated case', ''];
    public const INVESTIGATION_RATE_CASE = [8, 'INVESTIGATION_RATE_CASE', 'Investigation rate', ''];
    public const INVESTIGATED_CONFIRMED_CASE = [9, 'INVESTIGATED_CONFIRMED_CASE', 'Number investigated true case', ''];
    public const INVESTIGATION_CONFIRMED_RATE_CASE = [10, 'INVESTIGATION_CONFIRMED_RATE_CASE', 'Investigated true case rate', ''];

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @ORM\Column(type="string")
     */
    private string $code;

    /**
     * @ORM\Column(type="string")
     */
    private string $name;

    /**
     * @ORM\Column(type="text")
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

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
}
