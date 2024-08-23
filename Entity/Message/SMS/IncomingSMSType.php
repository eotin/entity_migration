<?php

namespace App\Entity\Message\SMS;

class IncomingSMSType
{
    public const TYPE_STANDARD = 0;                               // Standard Message
    public const TYPE_CONFIG = 1;                                 // CONFIG Message

    public const TYPE_UNKNOWN = 9;                                 // Unknown type
    public const TYPE_ERROR = 10;                                  // Error
}
