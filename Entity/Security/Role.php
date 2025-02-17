<?php

namespace App\Entity\Security;

use App\Entity\Traits\IdentifierAutogeneratedTrait;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Security\RoleRepository")
 *
 * @UniqueEntity(fields="name", message="This name already exists.")
 * @UniqueEntity(fields="code", message="This code already exists.")
 */
class Role
{
    use IdentifierAutogeneratedTrait;

    /**
     * @ORM\Column(type="string", nullable=false, unique=true)
     */
    private string $name;

    /**
     * @ORM\Column(type="string", nullable=false, unique=true)
     */
    private string $code;

    /**
     * @ORM\ManyToMany(targetEntity="User", mappedBy="applicationRoles")
     */
    private Collection $users;

    /**
     * @ORM\OneToMany(targetEntity="Permission", mappedBy="role", cascade={"remove", "persist"})
     */
    private Collection $permissions;

    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->permissions = new ArrayCollection();
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function getPermissions(): Collection
    {
        return $this->permissions;
    }

    public function addPermission(Permission $permission): void
    {
        $this->permissions->add($permission);
        $permission->setRole($this);
    }

    public function setPermission(Collection $collection): void
    {
        $this->permissions = $collection;
    }

    /**
     * Override toString method for crud easyAdmin.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->getName();
    }
}
