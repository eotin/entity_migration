<?php

namespace App\Entity\Message\SMS;

abstract class IncomingSMSStatus
{
    public const STATUS_NEW = 0;                  // Just arrived
    public const STATUS_NOT_PROCESSED = 1;                  // Not Processed
    public const STATUS_PROCESSED = 2;                  // Processed
    public const STATUS_IGNORED = 3;                  // Ignored
    public const STATUS_PHONE_NUMBER_UNKNOWN = 4;                  // Unknown contact number
    public const STATUS_INFORMANT_DEACTIVATED = 5;                  // Contact deactivated
    public const STATUS_PHONE_NUMBER_GATEWAY = 6;                  // Number corresponds to a gateway number
    public const STATUS_TRAINING = 7;                  // Training Mode
    public const STATUS_DUPLICATE = 8;                  // Duplicate
    public const STATUS_INCOMPLETE = 9;                  // Incomplete (First part of multipart)

    public const STATUS_ERROR = 10;                 // Error

    public static function getStatuses(): array
    {
        return [
          self::STATUS_NEW => 'STATUS_NEW',
          self::STATUS_NOT_PROCESSED => 'STATUS_NOT_PROCESSED',
          self::STATUS_PROCESSED => 'STATUS_PROCESSED',
          self::STATUS_IGNORED => 'STATUS_IGNORED',
          self::STATUS_PHONE_NUMBER_UNKNOWN => 'STATUS_PHONE_NUMBER_UNKNOWN',
          self::STATUS_INFORMANT_DEACTIVATED => 'STATUS_INFORMANT_DEACTIVATED',
          self::STATUS_PHONE_NUMBER_GATEWAY => 'STATUS_PHONE_NUMBER_GATEWAY',
          self::STATUS_TRAINING => 'STATUS_TRAINING',
          self::STATUS_DUPLICATE => 'STATUS_DUPLICATE',
          self::STATUS_INCOMPLETE => 'STATUS_INCOMPLETE',
          self::STATUS_ERROR => 'STATUS_ERROR',
        ];
    }
}
