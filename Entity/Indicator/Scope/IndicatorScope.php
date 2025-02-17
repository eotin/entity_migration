<?php

namespace App\Entity\Indicator\Scope;

use App\Entity\Calendar\CalendarType;
use App\Entity\Disease\Disease;
use App\Entity\Indicator\Indicator;
use App\Entity\Indicator\IndicatorDataType;
use App\Entity\Submission\AndiSubmissionField;
use App\Entity\Submission\AndiSubmissionType;
use App\Entity\Traits\IdentifierAutogeneratedTrait;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Indicator\Scope\IndicatorScopeRepository")
 * @ORM\Table(
 *     uniqueConstraints={ @ORM\UniqueConstraint(name="indicator_scope_udx",
 *      columns={"site_level", "FK_indicatorId", "FK_calendarTypeId",
 *          "FK_submissionTypeId", "FK_submissionFieldId", "FK_diseaseId"}
 *     )
 *   }
 * )
 * Class IndicatorScope
 */
class IndicatorScope
{
    use IdentifierAutogeneratedTrait;

    //Expected reports (EX) Time dimension (DT) Site Level dimension (SL)
    // Expected report - Weekly - Site dimension
    public const EX_WE_SL = 'EX_WE_SL';
    // Expected report - Daily - Site dimension
    public const EX_DA_SL = 'EX_DA_SL';
    // Received report - Weekly - Site dimension
    public const RE_WE_SL = 'RE_WE_SL';
    // Received report - Daily - Site dimension
    public const RE_DA_SL = 'RE_DA_SL';
    // Completeness - Weekly - Site dimension
    public const CO_WE_SL = 'CO_WE_SL';
    // Completeness - Daily - Site dimension
    public const CO_DA_SL = 'CO_DA_SL';
    // On Time Received report - Weekly - Site dimension
    public const OT_RE_WE_SL = 'OT_RE_WE_SL';
    // Timeliness - Weekly - Site dimension
    public const TI_WE_SL = 'TI_WE_SL';
    // Number cases - Weekly - Site dimension
    public const NC_WE_SL = 'NC_WE_SL';
    // Number investigated cases - Weekly - Site dimension
    public const NI_WE_SL = 'NI_WE_SL';
    // Investigation Rate - Weekly - Site dimension
    public const IR_WE_SL = 'IR_WE_SL';
    // Number investigated true (confirmed) cases - Weekly - Site dimension
    public const NIC_WE_SL = 'NIC_WE_SL';
    // Investigation true (confirmed) Rate - Weekly - Site dimension
    public const ICR_WE_SL = 'ICR_WE_SL';

    /**
     * @ORM\Column(type="string")
     */
    private string $code;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    private string $aggregationCode;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private ?string $translationKey;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Indicator\Indicator")
     * @ORM\JoinColumn(name="FK_indicatorId", referencedColumnName="id", nullable=false)
     */
    private Indicator $indicator;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Calendar\CalendarType")
     * @ORM\JoinColumn(name="FK_calendarTypeId", referencedColumnName="id", nullable=false)
     */
    private CalendarType $calendarType;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Indicator\IndicatorDataType")
     * @ORM\JoinColumn(name="FK_indicatorDataTypeId", referencedColumnName="id", nullable=false)
     */
    private IndicatorDataType $indicatorDataType;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $siteLevel;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Submission\AndiSubmissionType")
     * @ORM\JoinColumn(name="FK_submissionTypeId", referencedColumnName="id", nullable=true)
     */
    private ?AndiSubmissionType $submissionType;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Submission\AndiSubmissionField")
     * @ORM\JoinColumn(name="FK_submissionFieldId", referencedColumnName="id", nullable=true)
     */
    private ?AndiSubmissionField $submissionField;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Disease\Disease")
     * @ORM\JoinColumn(name="FK_diseaseId", referencedColumnName="id", nullable=true)
     */
    private ?Disease $disease;

    /**
     * @ORM\OneToMany(targetEntity="IndicatorScopeThreshold", mappedBy="indicatorScope", cascade={"remove"})
     */
    private Collection $indicatorScopeThreshold;

    /**
     * @ORM\OneToMany(targetEntity="IndicatorScopeGroupMembership", mappedBy="indicatorScope")
     */
    private Collection $indicatorScopeGroupMemberships;

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    public function getSiteLevel(): ?int
    {
        return $this->siteLevel;
    }

    public function setSiteLevel(?int $siteLevel): void
    {
        $this->siteLevel = $siteLevel;
    }

    public function getIndicator(): Indicator
    {
        return $this->indicator;
    }

    public function setIndicator(Indicator $indicator): void
    {
        $this->indicator = $indicator;
    }

    public function getCalendarType(): CalendarType
    {
        return $this->calendarType;
    }

    public function setCalendarType(CalendarType $calendarType): void
    {
        $this->calendarType = $calendarType;
    }

    public function getSubmissionType(): ?AndiSubmissionType
    {
        return $this->submissionType;
    }

    public function setSubmissionType(?AndiSubmissionType $submissionType): void
    {
        $this->submissionType = $submissionType;
    }

    public function getSubmissionField(): ?AndiSubmissionField
    {
        return $this->submissionField;
    }

    public function setSubmissionField(?AndiSubmissionField $submissionField): void
    {
        $this->submissionField = $submissionField;
    }

    public function getIndicatorDataType(): IndicatorDataType
    {
        return $this->indicatorDataType;
    }

    public function setIndicatorDataType(IndicatorDataType $indicatorDataType): void
    {
        $this->indicatorDataType = $indicatorDataType;
    }

    public function getAggregationCode(): string
    {
        return $this->aggregationCode;
    }

    public function setAggregationCode(string $aggregationCode): void
    {
        $this->aggregationCode = $aggregationCode;
    }

    public function getDisease(): ?Disease
    {
        return $this->disease;
    }

    public function setDisease(?Disease $disease): void
    {
        $this->disease = $disease;
    }

    public function setTranslationKey(?string $translationKey): void
    {
        $this->translationKey = $translationKey;
    }
}
