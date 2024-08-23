<?php

namespace App\Entity\Odk;

use App\Entity\Core\Site;

class OnaAPICallConfiguration
{
    private string $siteReference;

    private Site $site;

    private string $url;

    private bool $verifyPeerSslCertificate;

    private bool $checkCommonNameInSslCertificate;

    private string $username;

    private string $password;

    private string $formIdString;

    private ?int $initRetrievalId = null;

    private ?array $query = null;

    public function getSiteReference(): string
    {
        return $this->siteReference;
    }

    public function setSiteReference(string $siteReference): void
    {
        $this->siteReference = $siteReference;
    }

    public function getSite(): Site
    {
        return $this->site;
    }

    public function setSite(Site $site): void
    {
        $this->site = $site;
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

    public function getFormIdString(): string
    {
        return $this->formIdString;
    }

    public function setFormIdString(string $formIdString): void
    {
        $this->formIdString = $formIdString;
    }

    public function getInitRetrievalId(): ?int
    {
        return $this->initRetrievalId;
    }

    public function setInitRetrievalId(?int $initRetrievalId): void
    {
        $this->initRetrievalId = $initRetrievalId;
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
