<?php

namespace App\Entity;

interface CollectionDTOInterface
{
    public function getElements(): array;

    public function setElements(array $elements): void;
}
