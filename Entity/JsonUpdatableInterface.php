<?php

namespace App\Entity;

interface JsonUpdatableInterface
{
    public function getJsonData(): ?array;

    public function setJsonData(?array $jsonData): void;
}
