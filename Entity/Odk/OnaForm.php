<?php

namespace App\Entity\Odk;

use App\Entity\Core\Site;

class OnaForm
{
    private int $id;

    private int $investigationConfigurationId;

    private string $id_string;

    private string $title;

    private string $description;

    private string $url;

    private bool $verifyPeerSslCertificate;

    private bool $checkCommonNameInSslCertificate;

    private string $username;

    private string $password;

    private ?int $initRetrievalId = null;

    private Site $site;

    private ?array $query;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getInvestigationConfigurationId(): int
    {
        return $this->investigationConfigurationId;
    }

    public function setInvestigationConfigurationId(int $investigationConfigurationId): void
    {
        $this->investigationConfigurationId = $investigationConfigurationId;
    }

    public function getIdString(): string
    {
        return $this->id_string;
    }

    public function setIdString(string $id_string): void
    {
        $this->id_string = $id_string;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    public function isVerifyPeerSslCertificate(): bool
    {
        return $this->verifyPeerSslCertificate;
    }

    public function setVerifyPeerSslCertificate(bool $verifyPeerSslCertificate): void
    {
        $this->verifyPeerSslCertificate = $verifyPeerSslCertificate;
    }

    public function isCheckCommonNameInSslCertificate(): bool
    {
        return $this->checkCommonNameInSslCertificate;
    }

    public function setCheckCommonNameInSslCertificate(bool $checkCommonNameInSslCertificate): void
    {
        $this->checkCommonNameInSslCertificate = $checkCommonNameInSslCertificate;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getInitRetrievalId(): ?int
    {
        return $this->initRetrievalId;
    }

    public function setInitRetrievalId(?int $initRetrievalId): void
    {
        $this->initRetrievalId = $initRetrievalId;
    }

    /**
     * @deprecated
     */
    public function getSite(): Site
    {
        return $this->site;
    }

    /**
     * @deprecated
     */
    public function setSite(Site $site): void
    {
        $this->site = $site;
    }

    public function getQuery(): ?array
    {
        return $this->query;
    }

    public function setQuery(?array $query): void
    {
        $this->query = $query;
    }
}
