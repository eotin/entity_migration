<?php

namespace App\Entity\Fhir\DTO;


use App\Entity\Core\Site;
use App\Entity\Disease\Disease;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRBundle;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDiagnosticReport;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIREncounter;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRLocation;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPatient;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPractitioner;

class FhirBundleInvestigationDTO
{
    private array $json;

    private ?FHIRBundle $bundle = null;
    private ?FHIRDiagnosticReport $diagnosticReport = null;
    private ?FHIREncounter $encounter = null;
    private ?FHIRLocation $location = null;
    private ?FHIRPatient $patient = null;
    private ?FHIRPractitioner $practitioner = null;

    private ?string $identifier = null;

    private ?Site $site = null;
    private ?Disease $disease = null;


    /**
     * @return array
     */
    public function getJson(): array
    {
        return $this->json;
    }

    /**
     * @param array $json
     */
    public function setJson(array $json): void
    {
        $this->json = $json;
    }

    /**
     * @return FHIRBundle|null
     */
    public function getBundle(): ?FHIRBundle
    {
        return $this->bundle;
    }

    /**
     * @param FHIRBundle|null $bundle
     */
    public function setBundle(?FHIRBundle $bundle): void
    {
        $this->bundle = $bundle;
    }

    /**
     * @return FHIRDiagnosticReport|null
     */
    public function getDiagnosticReport(): ?FHIRDiagnosticReport
    {
        return $this->diagnosticReport;
    }

    /**
     * @param FHIRDiagnosticReport|null $diagnosticReport
     */
    public function setDiagnosticReport(?FHIRDiagnosticReport $diagnosticReport): void
    {
        $this->diagnosticReport = $diagnosticReport;
    }

    /**
     * @return FHIREncounter|null
     */
    public function getEncounter(): ?FHIREncounter
    {
        return $this->encounter;
    }

    /**
     * @param FHIREncounter|null $encounter
     */
    public function setEncounter(?FHIREncounter $encounter): void
    {
        $this->encounter = $encounter;
    }

    /**
     * @return FHIRLocation|null
     */
    public function getLocation(): ?FHIRLocation
    {
        return $this->location;
    }

    /**
     * @param FHIRLocation|null $location
     */
    public function setLocation(?FHIRLocation $location): void
    {
        $this->location = $location;
    }

    /**
     * @return FHIRPatient|null
     */
    public function getPatient(): ?FHIRPatient
    {
        return $this->patient;
    }

    /**
     * @param FHIRPatient|null $patient
     */
    public function setPatient(?FHIRPatient $patient): void
    {
        $this->patient = $patient;
    }

    /**
     * @return FHIRPractitioner|null
     */
    public function getPractitioner(): ?FHIRPractitioner
    {
        return $this->practitioner;
    }

    /**
     * @param FHIRPractitioner|null $practitioner
     */
    public function setPractitioner(?FHIRPractitioner $practitioner): void
    {
        $this->practitioner = $practitioner;
    }

    public function setIdentifier(?string $identifier)
    {
        $this->identifier = $identifier;
    }

    public function getIdentifier(): ?string
    {
        return $this->identifier;
    }

    public function getSite(): ?Site
    {
        return $this->site;
    }

    public function setSite(?Site $site): void
    {
        $this->site = $site;
    }

    public function getDisease(): ?Disease
    {
        return $this->disease;
    }

    public function setDisease(?Disease $disease): void
    {
        $this->disease = $disease;
    }

    public function hasMissingObjects(): bool
    {
        return ($this->getBundle() === null
            || $this->getDiagnosticReport() === null
            || $this->getEncounter() === null
            || $this->getLocation() === null
            || $this->getPatient() === null
            || $this->getPractitioner() === null);
    }
}
