<?php

namespace App\Entity\Investigation;

interface InvestigationInterface
{
    public function setIdentifier(string $identifier): void;

    public function setInvestigationDate(?\DateTime $investigationDate): void;

    public function setDiseaseConfirmed(?bool $diseaseConfirmed): void;

    public function setTurnaround(?int $turnaround): void;

    public function setSubmissionTime(?\DateTime $submissionTime): void;

    public function setToday(?\DateTime $today): void;

    public function setJsonData(?array $jsonData): void;
}
