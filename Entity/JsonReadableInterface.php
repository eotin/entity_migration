<?php

namespace App\Entity;

interface JsonReadableInterface
{
    public function getJsonData();

    public function getValueForProperty(?string $property);
}
