<?php

namespace App\Entity;

abstract class AbstractJsonReadableEntity implements JsonReadableInterface
{
    abstract public function getJsonData(): ?array;

    public function getValueForProperty(?string $property)
    {
        if (empty($property)) {
            return null;
        }

        if (strpos($property, '$') === 0) {
            $prop = substr($property, 2); // Remove "$."

            // we need to find data into jsonData property if it exists
            $parts = explode('.', $prop);
            $jsonValue = $this->getJsonData();

            foreach ($parts as $iValue) {
                $jsonValue = $jsonValue[$iValue] ?? null;
                if ($jsonValue === null) {
                    return null;
                }
            }

            return $jsonValue;
        }

        return property_exists($this, $property) ? $this->$property : null;
    }
}
