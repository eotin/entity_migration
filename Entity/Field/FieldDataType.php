<?php

namespace App\Entity\Field;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class FieldDataType.
 *
 * @ORM\Entity(repositoryClass="App\Repository\Field\FieldDataTypeRepository")
 */
class FieldDataType
{
    // [1] => Id, [2] => Code, [3] => Name
    public const STRING = [1, 'STRING', 'STRING'];
    public const NUMBER = [2, 'NUMBER', 'NUMBER'];
    public const BOOLEAN = [3, 'BOOLEAN', 'BOOLEAN'];
    public const DATETIME = [4, 'DATETIME', 'DATETIME'];
    public const DATE = [5, 'DATE', 'DATE'];
    public const GPS_COORDINATE = [6, 'GPS_COORDINATE', 'GPS_COORDINATE'];

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
}
