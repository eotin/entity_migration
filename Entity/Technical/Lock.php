<?php

namespace App\Entity\Technical;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Timestampable\Traits\TimestampableEntity;

/**
 * Class Lock.
 *
 * @ORM\Entity(repositoryClass="App\Repository\Technical\LockRepository")
 * @ORM\Table( name="locks", uniqueConstraints={@ORM\UniqueConstraint(name="lock_udx", columns={"name"})})
 *
 * Needs to rename table as lock is a technical MySQL reserved word
 */
class Lock
{
    use TimestampableEntity;

    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=255)
     */
    private string $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private string $value;

    /**
     * @ORM\Column(type="float")
     */
    private float $expire;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function setValue(string $value): void
    {
        $this->value = $value;
    }

    public function getExpire(): float
    {
        return $this->expire;
    }

    public function setExpire(float $expire): void
    {
        $this->expire = $expire;
    }
}
