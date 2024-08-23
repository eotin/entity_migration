<?php

namespace App\Entity\Security;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * To avoid this issue : https://stackoverflow.com/questions/1814532/mysql-error-1071-specified-key-was-too-long-max-key-length-is-767-bytes/38675910#38675910
 * we reduced the length of the column used in the unique constraint.
 *
 * @ORM\Entity
 * @ORM\Table(uniqueConstraints=
 *     { @ORM\UniqueConstraint(name="permission_udx", columns={"resource", "action", "state", "level", "type", "scope", "roleId"}) }
 * )
 * @UniqueEntity(fields={"resource", "action", "state", "level", "type", "scope", "role"}, message="This permission already exists")
 */
class Permission
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private int $id;

    /**
     * @ORM\Column(type="string", nullable=false, length=100)
     */
    private string $resource;

    /**
     * @ORM\Column(type="string", nullable=false, length=100)
     */
    private string $action;

    /**
     * @ORM\Column(type="string", nullable=false, length=100)
     */
    private string $state;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private int $level;

    /**
     * @ORM\Column(type="string", nullable=false, length=100)
     */
    private string $type;

    /**
     * @ORM\Column(type="string", nullable=false, length=100)
     */
    private string $scope;

    /**
     * @ORM\ManyToOne(targetEntity="Role", inversedBy="permissions")
     * @ORM\JoinColumn(name="roleId", referencedColumnName="id")
     */
    private Role $role;

    private int $roleId;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getAction(): string
    {
        return $this->action;
    }

    public function setAction(string $action): void
    {
        $this->action = $action;
    }

    public function getResource(): string
    {
        return $this->resource;
    }

    public function setResource(string $resource): string
    {
        return $this->resource = $resource;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function setState(string $state): string
    {
        return $this->state = $state;
    }

    public function getLevel(): int
    {
        return $this->level;
    }

    public function setLevel(int $level): int
    {
        return $this->level = $level;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getScope(): string
    {
        return $this->scope;
    }

    public function setScope(string $scope): string
    {
        return $this->scope = $scope;
    }

    public function setRole(Role $role): void
    {
        $this->role = $role;
    }

    public function getRole(): Role
    {
        return $this->role;
    }

    public function setRoleId(int $roleId): void
    {
        $this->roleId = $roleId;
    }

    public function getRoleId(): int
    {
        return $this->roleId;
    }

    /**
     * @param $indicators
     * @param $roles
     */
    public function isValidPermission($indicators, $roles): bool
    {
        $actionValid = in_array($this->action, PermissionAction::getValues());
        $resourceValid = in_array($this->resource, PermissionResource::getValues());
        $stateValid = in_array($this->state, PermissionState::getValues());

        if ($this->resource === PermissionResource::RESOURCE_INDICATOR) {
            // check indicators
           /* @var $indicator */
          /*  foreach ($indicators as $indicator) {
                if ($indicator->getCode() == $this->state) {
                    $stateValid = true;
                    break;
                }
            }*/
        } elseif ($this->resource === PermissionResource::RESOURCE_USER) {
            // check roles
            /** @var Role $role */
            foreach ($roles as $role) {
                if ($role->getCode() === $this->state) {
                    $stateValid = true;
                    break;
                }
            }
        }

        $typeValid = in_array($this->type, PermissionType::getValues());
        $scopeValid = in_array($this->scope, PermissionScope::getValues());

        return $actionValid && $resourceValid && $stateValid && $typeValid && $scopeValid;
    }

    /**
     * @param $level
     */
    public function checkLevel($level): bool
    {
        return ($this->getLevel() === 0 && $level === 0) ||
            ($this->getLevel() < 0 && $level < 0 && $level >= $this->getLevel()) ||
            ($this->getLevel() > 0 && $level > 0 && $level <= $this->getLevel());
    }

    /**
     * @param $level
     */
    public function checkExactLevel($level): bool
    {
        return $this->getLevel() === $level;
    }
}
