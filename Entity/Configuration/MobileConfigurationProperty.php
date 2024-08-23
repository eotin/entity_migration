<?php

namespace App\Entity\Configuration;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Configuration\MobileConfigurationPropertyRepository")
 */
class MobileConfigurationProperty
{
    public const GATEWAY = [1, 'GATEWAY', 'Gateway', 'sms_gateway', 'Gateway number'];
    public const DISEASES = [2, 'DISEASES', 'Diseases', 'diseases', 'Disease configuration (activation/outbreak)'];
    public const FORMS = [3, 'FORMS', 'Forms', 'forms', 'Forms, medias, icons'];
    public const SERVER_URL = [4, 'UPLOAD_URL', 'Upload Url', 'server_url', 'Openrosa Upload Url'];
    public const SERVER_CONFIG_URL = [5, 'SERVER_CONFIG_URL', 'Server Config Url', 'server_url_config', 'Configuration Server Url'];

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected int $id;

    /**
     * @ORM\Column(type="string", nullable=false, unique=true)
     */
    private string $code;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    private string $name;

    /**
     * @ORM\Column(type="string", nullable=false, unique=true)
     */
    private string $propertyName;

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

    public function getPropertyName(): string
    {
        return $this->propertyName;
    }

    public function setPropertyName(string $propertyName): void
    {
        $this->propertyName = $propertyName;
    }

    public function getDesc(): string
    {
        return $this->description;
    }

    public function setDesc(string $description): void
    {
        $this->description = $description;
    }

    public function __toString(): string
    {
        return $this->getName().' ('.$this->getPropertyName().')';
    }

    /**
     * Only return updatable values.
     *
     * @return array[]
     */
    public static function getCodeValues(): array
    {
        return [
            self::GATEWAY[1],
        ];
    }
}
