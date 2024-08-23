<?php

namespace App\Entity\Security;

class PermissionResource
{
    public const RESOURCE_INDICATOR = 'INDICATOR';
    public const RESOURCE_USER = 'USER';
    public const RESOURCE_SITE = 'SITE';
    public const RESOURCE_CASES = 'CASES';
    public const RESOURCE_SELF_REGISTERED = 'SELF_REGISTERED';
    public const RESOURCE_INFORMANT = 'INFORMANT';
    public const RESOURCE_INVESTIGATOR = 'INVESTIGATOR';
    public const RESOURCE_TRAINING_INVESTIGATOR = 'TRAINING_INVESTIGATOR';
    public const RESOURCE_GATEWAY = 'GATEWAY';
    public const RESOURCE_DISEASE = 'DISEASE';
    public const RESOURCE_SMS = 'SMS';
    public const RESOURCE_FHIR = 'FHIR';

    public static function getValues(): array
    {
        return [
            self::RESOURCE_INDICATOR,
            self::RESOURCE_USER,
            self::RESOURCE_SITE,
            self::RESOURCE_CASES,
            self::RESOURCE_SELF_REGISTERED,
            self::RESOURCE_INFORMANT,
            self::RESOURCE_INVESTIGATOR,
            self::RESOURCE_TRAINING_INVESTIGATOR,
            self::RESOURCE_GATEWAY,
            self::RESOURCE_DISEASE,
            self::RESOURCE_SMS,
            self::RESOURCE_FHIR
        ];
    }
}
