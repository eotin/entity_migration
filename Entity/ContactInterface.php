<?php

namespace App\Entity;

interface ContactInterface
{
    public function getPhoneNumber(): string;

    public function getPreferredGateway(): ?string;

    public function getLastUsedGateway(): ?string;

    public function setLastUsedGateway(?string $lastUsedGateway): void;
}
