<?php

namespace App\Entity\Fhir;

abstract class FhirCaseStatus
{
    public const STATUS_NEW = 0;                  // Just arrived
    public const STATUS_REJECTED = 1;             // Rejected
    // public const STATUS_UPDATED = 2;             // Updated
    public const STATUS_PROCESSED = 3;            // Processed

    public const STATUS_ERROR = 10;                 // Error

    public static function getStatuses(): array
    {
        return [
            self::STATUS_NEW => 'STATUS_NEW',
            self::STATUS_REJECTED => 'STATUS_REJECTED',
            // self::STATUS_UPDATED => 'STATUS_UPDATED',
            self::STATUS_PROCESSED => 'STATUS_PROCESSED',
            self::STATUS_ERROR => 'STATUS_ERROR',
        ];
    }
}
