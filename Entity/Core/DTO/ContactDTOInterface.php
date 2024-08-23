<?php

namespace App\Entity\Core\DTO;

interface ContactDTOInterface
{
    public function getPhoneNumber(): string;

    public function getContactTypeReference(): ?string;

    public function getSiteReference(): ?string;

    public function getEnabled(): bool;
}
