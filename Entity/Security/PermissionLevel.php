<?php

namespace App\Entity\Security;

class PermissionLevel
{
    public static function getValues(int $from = -10, int $to = 10): array
    {
        $levels = [];

        for ($i = $from; $i <= $to; $i++) {
            $levels[$i] = (string) $i;
        }

        return $levels;
    }
}
