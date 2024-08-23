<?php

namespace App\Entity\Message\SMS\Config;

abstract class AckConfigSMSCode
{
    public const NO_ERROR = 0;
    public const UNKNOWN_CONFIG_FORMAT = 1;
    public const WRONG_HASH = 2;
    public const WRONG_IMEI = 3;
    public const UNKNOWN_COMMAND = 4;
    public const UNKNOWN_SETTING = 5;
    public const EMPTY_VALUE = 6;
    public const OTHER = 10;
    public const UNKNOWN_EXCEPTION = 20;
}
