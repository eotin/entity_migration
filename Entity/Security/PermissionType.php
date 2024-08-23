<?php

namespace App\Entity\Security;

class PermissionType
{
    public const TYPE_ALLOW = 'ALLOW';
    public const TYPE_DENY = 'DENY';

    public static function getValues(): array
    {
        return [
            self::TYPE_ALLOW,
            self::TYPE_DENY,
        ];
    }
}
