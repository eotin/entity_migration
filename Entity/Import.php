<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Import.
 *
 * @ORM\Entity()
 */
class Import
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer", nullable=false)
     */
    protected $id;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    protected string $class;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    protected string $file;

    /**
     * @return ?int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getClass(): string
    {
        return $this->class;
    }

    public function setClass(string $class): void
    {
        $this->class = $class;
    }

    public function getFile(): string
    {
        return $this->file;
    }

    public function setFile(string $file): void
    {
        $this->file = $file;
    }
}
