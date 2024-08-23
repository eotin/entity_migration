<?php

namespace App\Entity\Odk;

class AndiOnaFormSubmission extends OnaFormSubmission
{
    protected ?bool $diseaseConfirmed = null;

    protected ?\DateTime $investigationDate;

    protected ?int $investigationTurnaround = null;

    protected \DateTime $dateOnset;

    protected ?int $childAgeMonths = null;

    protected ?string $fatherName = null;

    protected ?string $motherName = null;

    protected ?string $childName = null;

    protected ?string $childSex = null;

    protected ?string $address = null;

    protected ?string $ist;

    protected ?string $country;

    protected ?string $adminLevel1;

    protected ?string $AdminLevel2;

    protected ?string $adminLevel3;

    protected ?string $town;

    protected ?string $settlement;

    protected ?string $area;

    protected ?bool $previouslyReported;

    protected ?string $informantName;

    protected ?string $religion;

    protected ?bool $isFromRefugeeCamp;

    protected ?string $refugeeCampName;

    protected ?string $districtOriginRefugeeCamp;

    protected ?\DateTime $refugeeCampParentsArrivalDate;

    protected ?\DateTime $notificationDate;

    protected ?string $longitude;

    protected ?string $latitude;

    protected ?string $officerName;

    /**
     * @return ?bool
     */
    public function isDiseaseConfirmed(): ?bool
    {
        return $this->diseaseConfirmed;
    }

    /**
     * @param ?bool $diseaseConfirmed
     */
    public function setDiseaseConfirmed(?bool $diseaseConfirmed): void
    {
        $this->diseaseConfirmed = $diseaseConfirmed;
    }

    /**
     * @return ?\DateTime
     */
    public function getInvestigationDate(): ?\DateTime
    {
        return $this->investigationDate;
    }

    /**
     * @param ?\DateTime $investigationDate
     */
    public function setInvestigationDate(?\DateTime $investigationDate): void
    {
        $this->investigationDate = $investigationDate;
    }

    /**
     * @return ?int
     */
    public function getInvestigationTurnaround(): ?int
    {
        return $this->investigationTurnaround;
    }

    /**
     * @param ?int $investigationTurnaround
     */
    public function setInvestigationTurnaround(?int $investigationTurnaround): void
    {
        $this->investigationTurnaround = $investigationTurnaround;
    }

    public function getDateOnset(): \DateTime
    {
        return $this->dateOnset;
    }

    public function setDateOnset(\DateTime $dateOnset): void
    {
        $this->dateOnset = $dateOnset;
    }

    /**
     * @return ?int
     */
    public function getChildAgeMonths(): ?int
    {
        return $this->childAgeMonths;
    }

    /**
     * @param ?int $childAgeMonths
     */
    public function setChildAgeMonths(?int $childAgeMonths): void
    {
        $this->childAgeMonths = $childAgeMonths;
    }

    /**
     * @return ?string
     */
    public function getFatherName(): ?string
    {
        return $this->fatherName;
    }

    /**
     * @param ?string $fatherName
     */
    public function setFatherName(?string $fatherName): void
    {
        $this->fatherName = $fatherName;
    }

    /**
     * @return ?string
     */
    public function getMotherName(): string
    {
        return $this->motherName;
    }

    /**
     * @param ?string $motherName
     */
    public function setMotherName(?string $motherName): void
    {
        $this->motherName = $motherName;
    }

    /**
     * @return ?string
     */
    public function getChildName(): string
    {
        return $this->childName;
    }

    /**
     * @param ?string $childName
     */
    public function setChildName(?string $childName): void
    {
        $this->childName = $childName;
    }

    /**
     * @return ?string
     */
    public function getChildSex(): string
    {
        return $this->childSex;
    }

    /**
     * @param ?string $childSex
     */
    public function setChildSex(?string $childSex): void
    {
        $this->childSex = $childSex;
    }

    /**
     * @return ?string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param ?string $address
     */
    public function setAddress(?string $address): void
    {
        $this->address = $address;
    }

    /**
     * @return ?\DateTime
     */
    public function getFirstStoolDate(): \DateTime
    {
        return $this->firstStoolDate;
    }

    /**
     * @param ?\DateTime $firstStoolDate
     */
    public function setFirstStoolDate(?\DateTime $firstStoolDate): void
    {
        $this->firstStoolDate = $firstStoolDate;
    }

    /**
     * @return ?\DateTime
     */
    public function getSecondStoolDate(): ?\DateTime
    {
        return $this->secondStoolDate;
    }

    /**
     * @param ?\DateTime $secondStoolDate
     */
    public function setSecondStoolDate(?\DateTime $secondStoolDate): void
    {
        $this->secondStoolDate = $secondStoolDate;
    }

    /**
     * @return ?string
     */
    public function getIst(): ?string
    {
        return $this->ist;
    }

    /**
     * @param ?string $ist
     */
    public function setIst(?string $ist): void
    {
        $this->ist = $ist;
    }

    /**
     * @return ?string
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @param ?string $country
     */
    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    /**
     * @return ?string
     */
    public function getAdminLevel1(): ?string
    {
        return $this->adminLevel1;
    }

    /**
     * @param ?string $adminLevel1
     */
    public function setAdminLevel1(?string $adminLevel1): void
    {
        $this->adminLevel1 = $adminLevel1;
    }

    /**
     * @return ?string
     */
    public function getAdminLevel2(): ?string
    {
        return $this->AdminLevel2;
    }

    /**
     * @param ?string $AdminLevel2
     */
    public function setAdminLevel2(?string $AdminLevel2): void
    {
        $this->AdminLevel2 = $AdminLevel2;
    }

    /**
     * @return ?string
     */
    public function getAdminLevel3(): ?string
    {
        return $this->adminLevel3;
    }

    /**
     * @param ?string $adminLevel3
     */
    public function setAdminLevel3(?string $adminLevel3): void
    {
        $this->adminLevel3 = $adminLevel3;
    }

    /**
     * @return ?string
     */
    public function getTown(): ?string
    {
        return $this->town;
    }

    /**
     * @param ?string $town
     */
    public function setTown(?string $town): void
    {
        $this->town = $town;
    }

    /**
     * @return ?string
     */
    public function getSettlement(): ?string
    {
        return $this->settlement;
    }

    /**
     * @param ?string $settlement
     */
    public function setSettlement(?string $settlement): void
    {
        $this->settlement = $settlement;
    }

    /**
     * @return ?string
     */
    public function getArea(): ?string
    {
        return $this->area;
    }

    /**
     * @param ?string $area
     */
    public function setArea(?string $area): void
    {
        $this->area = $area;
    }

    /**
     * @return ?bool
     */
    public function isPreviouslyReported(): ?bool
    {
        return $this->previouslyReported;
    }

    /**
     * @param ?bool $previouslyReported
     */
    public function setPreviouslyReported(?bool $previouslyReported): void
    {
        $this->previouslyReported = $previouslyReported;
    }

    /**
     * @return ?string
     */
    public function getInformantName(): ?string
    {
        return $this->informantName;
    }

    /**
     * @param ?string $informantName
     */
    public function setInformantName(?string $informantName): void
    {
        $this->informantName = $informantName;
    }

    /**
     * @return ?string
     */
    public function getReligion(): ?string
    {
        return $this->religion;
    }

    /**
     * @param ?string $religion
     */
    public function setReligion(?string $religion): void
    {
        $this->religion = $religion;
    }

    /**
     * @return ?bool
     */
    public function isFromRefugeeCamp(): ?bool
    {
        return $this->isFromRefugeeCamp;
    }

    /**
     * @param ?bool $isFromRefugeeCamp
     */
    public function setIsFromRefugeeCamp(?bool $isFromRefugeeCamp): void
    {
        $this->isFromRefugeeCamp = $isFromRefugeeCamp;
    }

    /**
     * @return ?string
     */
    public function getRefugeeCampName(): ?string
    {
        return $this->refugeeCampName;
    }

    /**
     * @param ?string $refugeeCampName
     */
    public function setRefugeeCampName(?string $refugeeCampName): void
    {
        $this->refugeeCampName = $refugeeCampName;
    }

    /**
     * @return ?string
     */
    public function getDistrictOriginRefugeeCamp(): ?string
    {
        return $this->districtOriginRefugeeCamp;
    }

    /**
     * @param ?string $districtOriginRefugeeCamp
     */
    public function setDistrictOriginRefugeeCamp(?string $districtOriginRefugeeCamp): void
    {
        $this->districtOriginRefugeeCamp = $districtOriginRefugeeCamp;
    }

    /**
     * @return ?\DateTime
     */
    public function getRefugeeCampParentsArrivalDate(): ?\DateTime
    {
        return $this->refugeeCampParentsArrivalDate;
    }

    /**
     * @param ?\DateTime $refugeeCampParentsArrivalDate
     */
    public function setRefugeeCampParentsArrivalDate(?\DateTime $refugeeCampParentsArrivalDate): void
    {
        $this->refugeeCampParentsArrivalDate = $refugeeCampParentsArrivalDate;
    }

    /**
     * @return ?\DateTime
     */
    public function getNotificationDate(): ?\DateTime
    {
        return $this->notificationDate;
    }

    /**
     * @param ?\DateTime $notificationDate
     */
    public function setNotificationDate(?\DateTime $notificationDate): void
    {
        $this->notificationDate = $notificationDate;
    }

    /**
     * @return ?string
     */
    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    /**
     * @param ?string $longitude
     */
    public function setLongitude(?string $longitude): void
    {
        $this->longitude = $longitude;
    }

    /**
     * @return ?string
     */
    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    /**
     * @param ?string $latitude
     */
    public function setLatitude(?string $latitude): void
    {
        $this->latitude = $latitude;
    }

    /**
     * @return ?string
     */
    public function getOfficerName(): ?string
    {
        return $this->officerName;
    }

    /**
     * @param ?string $officerName
     */
    public function setOfficerName(?string $officerName): void
    {
        $this->officerName = $officerName;
    }
}
