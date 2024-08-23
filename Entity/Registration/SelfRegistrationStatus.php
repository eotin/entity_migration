<?php

namespace App\Entity\Registration;

abstract class SelfRegistrationStatus
{
    public CONST STATUS_NEW = 0;
    public CONST STATUS_APPROVED = 1;
    public CONST STATUS_OPERATIONAL = 2;
    public CONST STATUS_ACTIVE = 3;
}
