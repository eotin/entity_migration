<?php

namespace App\Entity\Configuration;

abstract class BatchConfigurationChangeStatus
{
    public const STATUS_CREATED = 'CREATED';
    public const STATUS_QUEUED = 'QUEUED';
    public const STATUS_IN_PROGRESS = 'IN_PROGRESS';
    public const STATUS_FINISHED = 'FINISHED';

    public static function getStatus(): array
    {
        return [
            self::STATUS_CREATED => self::STATUS_CREATED,
            self::STATUS_QUEUED => self::STATUS_QUEUED,
            self::STATUS_IN_PROGRESS => self::STATUS_IN_PROGRESS,
            self::STATUS_FINISHED => self::STATUS_FINISHED,
        ];
    }
}
