<?php

namespace App\Entity\Cases\Data;

use App\Entity\Field\FieldDataType;
use App\Entity\Traits\IdentifierAutogeneratedTrait;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * TODO Not sure UniqueConstraint is ok
 *
 * @ORM\Entity(repositoryClass="App\Repository\Cases\Data\CaseDataColumnRepository")
 * @ORM\Table(
 *     uniqueConstraints={@ORM\UniqueConstraint(name="cases_data_column_udx",
 *     columns={"FK_fieldDataTypeId", "sql_name", "translation_key", "source_sql_table", "source_sql_column"})},
 *     indexes={
 *          @ORM\Index(columns={"confidential"}),
 *          @ORM\Index(columns={"text_searchable"})
 *     }
 * )
 */
class CaseDataColumn
{
    use IdentifierAutogeneratedTrait;

    /**
     * @ORM\Column(type="string", nullable=false, length=100)
     */
    private string $SqlName;

    /**
     * @ORM\Column(type="string", nullable=true, length=100)
     */
    private ?string $sourceSqlTable;

    /**
     * @ORM\Column(type="string", nullable=true, length=100)
     */
    private ?string $sourceSqlColumn;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private string $translationKey;

    /**
     * @ORM\Column(type="string", nullable=true, length=100)
     */
    private ?string $dataTranslationKeyPrefix;

    /**
     * @ORM\Column(type="boolean", options={"default" = false}, nullable=false)
     */
    private bool $confidential = false;

    /**
     * @ORM\Column(type="boolean", options={"default" = false}, nullable=false)
     */
    private bool $textSearchable = false;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Field\FieldDataType")
     * @ORM\JoinColumn(name="FK_fieldDataTypeId", referencedColumnName="id")
     */
    private FieldDataType $fieldDataType;

    /**
     * @ORM\OneToMany(targetEntity="CaseDataColumnGroupMembership", mappedBy="caseDataColumn")
     */
    private Collection $caseDataColumnGroupMemberships;

    public function getSqlName(): string
    {
        return $this->SqlName;
    }

    public function setSqlName(string $SqlName): void
    {
        $this->SqlName = $SqlName;
    }

    public function getSourceSqlTable(): ?string
    {
        return $this->sourceSqlTable;
    }

    public function setSourceSqlTable(?string $sourceSqlTable): void
    {
        $this->sourceSqlTable = $sourceSqlTable;
    }

    public function getSourceSqlColumn(): ?string
    {
        return $this->sourceSqlColumn;
    }

    public function setSourceSqlColumn(?string $sourceSqlColumn): void
    {
        $this->sourceSqlColumn = $sourceSqlColumn;
    }

    public function getTranslationKey(): string
    {
        return $this->translationKey;
    }

    public function setTranslationKey(string $translationKey): void
    {
        $this->translationKey = $translationKey;
    }

    public function getDataTranslationKeyPrefix(): ?string
    {
        return $this->dataTranslationKeyPrefix;
    }

    public function setDataTranslationKeyPrefix(?string $dataTranslationKeyPrefix): void
    {
        $this->dataTranslationKeyPrefix = $dataTranslationKeyPrefix;
    }

    public function isConfidential(): bool
    {
        return $this->confidential;
    }

    public function setConfidential(bool $confidential): void
    {
        $this->confidential = $confidential;
    }

    public function isTextSearchable(): bool
    {
        return $this->textSearchable;
    }

    public function setTextSearchable(bool $textSearchable): void
    {
        $this->textSearchable = $textSearchable;
    }

    public function getFieldDataType(): FieldDataType
    {
        return $this->fieldDataType;
    }

    public function setFieldDataType(FieldDataType $fieldDataType): void
    {
        $this->fieldDataType = $fieldDataType;
    }
}
