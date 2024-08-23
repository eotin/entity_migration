<?php

namespace App\Entity\Security;

class PermissionState
{
    public const STATE_ANY = 'ANY';
    public const STATE_CONFIDENTIAL = 'CONFIDENTIAL';
    public const STATE_NOT_CONFIDENTIAL = 'NOT_CONFIDENTIAL';

    public static function getValues(): array
    {
        return [
            self::STATE_ANY,
            self::STATE_CONFIDENTIAL,
            self::STATE_NOT_CONFIDENTIAL,
        ];
    }
}
