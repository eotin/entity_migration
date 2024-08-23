<?php

namespace App\Entity\Security;

class PermissionAction
{
    public const ACTION_VIEW = 'VIEW';
    public const ACTION_DOWNLOAD = 'DOWNLOAD';
    public const ACTION_UPLOAD = 'UPLOAD';
    public const ACTION_EDIT = 'EDIT';
    public const ACTION_DELETE = 'DELETE';
    public const ACTION_ENABLE = 'ENABLE';
    public const ACTION_ALERT = 'ALERT';

    public static function getValues(): array
    {
        return [
            self::ACTION_VIEW,
            self::ACTION_DOWNLOAD,
            self::ACTION_UPLOAD,
            self::ACTION_EDIT,
            self::ACTION_DELETE,
            self::ACTION_ENABLE,
            self::ACTION_ALERT,
        ];
    }
}
