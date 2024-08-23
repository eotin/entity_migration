<?php

namespace App\Entity\Export\Excel;

class IndicatorScopeExcelDTO
{
    private int $scopeId;

    private string $indicatorDataTypeCode;

    private string $translationKey;

    private string $translatedName;

    private string $translatedName_numerator;

    private string $translatedName_denominator;

    public function getScopeId(): int
    {
        return $this->scopeId;
    }

    public function setScopeId(int $scopeId): void
    {
        $this->scopeId = $scopeId;
    }

    public function getIndicatorDataTypeCode(): string
    {
        return $this->indicatorDataTypeCode;
    }

    public function setIndicatorDataTypeCode(string $indicatorDataTypeCode): void
    {
        $this->indicatorDataTypeCode = $indicatorDataTypeCode;
    }

    public function getTranslationKey(): string
    {
        return $this->translationKey;
    }

    public function setTranslationKey(string $translationKey): void
    {
        $this->translationKey = $translationKey;
    }

    public function getTranslatedName(): string
    {
        return $this->translatedName;
    }

    public function setTranslatedName(string $translatedName): void
    {
        $this->translatedName = $translatedName;
    }

    public function getTranslatedNameNumerator(): string
    {
        return $this->translatedName_numerator;
    }

    public function setTranslatedNameNumerator(string $translatedName_numerator): void
    {
        $this->translatedName_numerator = $translatedName_numerator;
    }

    public function getTranslatedNameDenominator(): string
    {
        return $this->translatedName_denominator;
    }

    public function setTranslatedNameDenominator(string $translatedName_denominator): void
    {
        $this->translatedName_denominator = $translatedName_denominator;
    }

    /**
     * Used for array_unique().
     *
     * @return mixed
     */
    public function __toString(): string
    {
        return "$this->scopeId";
    }
}
