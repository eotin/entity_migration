<?php

namespace App\Entity\Security;

class PermissionScope
{
    public const SCOPE_BRANCH = 'BRANCH';
    public const SCOPE_SITE = 'SITE';
    public const SCOPE_LEVEL = 'LEVEL';
    public const SCOPE_ALL = 'ALL';
    public const SCOPE_NONE = 'NONE';

    public static function getValues(): array
    {
        return [
            self::SCOPE_BRANCH,
            self::SCOPE_SITE,
            self::SCOPE_LEVEL,
            self::SCOPE_ALL,
            self::SCOPE_NONE,
        ];
    }
}
