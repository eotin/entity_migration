<?php

namespace App\Entity\Indicator;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Indicator\IndicatorDataTypeRepository")
 * @ORM\Table(uniqueConstraints=
 *     { @ORM\UniqueConstraint(name="indicator_data_type_udx", columns={"code"}) }
 *  )
 * Class IndicatorDataType
 */
class IndicatorDataType
{
    public const NUMBER = [1, 'NUMBER', 'Number'];
    public const PERCENT = [2, 'PERCENT', 'Percent'];

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
