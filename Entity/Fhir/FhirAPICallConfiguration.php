<?php

namespace App\Entity\Fhir;

class FhirAPICallConfiguration
{
    private string $url;
    private string $loginUrl;
    private string $bundleUrl;
    private string $username;
    private string $password;
    private string $apiKey;

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getLoginUrl(): string
    {
        return $this->loginUrl;
    }

    /**
     * @param string $loginUrl
     */
    public function setLoginUrl(string $loginUrl): void
    {
        $this->loginUrl = $loginUrl;
    }


    /**
     * @return string
     */
    public function getBundleUrl(): string
    {
        return $this->bundleUrl;
    }

    /**
     * @param string $bundleUrl
     */
    public function setBundleUrl(string $bundleUrl): void
    {
        $this->bundleUrl = $bundleUrl;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    /**
     * @param string $apiKey
     */
    public function setApiKey(string $apiKey): void
    {
        $this->apiKey = $apiKey;
    }
}
