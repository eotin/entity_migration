<?php

namespace App\Entity\Logs;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Timestampable\Traits\TimestampableEntity;

/**
 * Class LogLevel.
 *
 * @ORM\Entity(repositoryClass="App\Repository\Logs\LogLevelRepository")
 */
class LogLevel
{
    use TimestampableEntity;
    public const DEBUG = [100, 'DEBUG'];
    public const INFO = [200, 'INFO'];
    public const NOTICE = [250, 'NOTICE'];
    public const WARNING = [300, 'WARNING'];
    public const ERROR = [400, 'ERROR'];
    public const CRITICAL = [500, 'CRITICAL'];
    public const ALERT = [550, 'ALERT'];
    public const EMERGENCY = [600, 'EMERGENCY'];

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private string $code;

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
}
