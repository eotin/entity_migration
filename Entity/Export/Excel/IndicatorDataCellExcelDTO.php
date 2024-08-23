<?php

namespace App\Entity\Export\Excel;

class IndicatorDataCellExcelDTO
{
    private $scopeIndex;

    private $value;

    private $numerator;

    private $denominator;

    /**
     * @return mixed
     */
    public function getScopeIndex()
    {
        return $this->scopeIndex;
    }

    /**
     * @param mixed $scopeIndex
     */
    public function setScopeIndex($scopeIndex): void
    {
        $this->scopeIndex = $scopeIndex;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value): void
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getNumerator()
    {
        return $this->numerator;
    }

    /**
     * @param mixed $numerator
     */
    public function setNumerator($numerator): void
    {
        $this->numerator = $numerator;
    }

    /**
     * @return mixed
     */
    public function getDenominator()
    {
        return $this->denominator;
    }

    /**
     * @param mixed $denominator
     */
    public function setDenominator($denominator): void
    {
        $this->denominator = $denominator;
    }
}
