<?php

namespace App\Entity\Core;

use App\Entity\AlertRecipient\InvestigatorSiteSubmissionTypeVersion;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Investigator.
 *
 * @ORM\Entity()
 */
class Investigator extends Contact
{
    public function __construct()
    {
        $this->investigatorSiteSubmissionTypeVersion = new ArrayCollection();
        $this->setEnabled(true);
    }

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\AlertRecipient\InvestigatorSiteSubmissionTypeVersion", mappedBy="investigator", cascade={"remove", "persist"})
     */
    protected Collection $investigatorSiteSubmissionTypeVersion;

    /**
     * @ORM\ManyToOne(targetEntity="InvestigatorType")
     * @ORM\JoinColumn(name="FK_typeId", nullable=true)
     */
    protected ?InvestigatorType $type;

    public function getType(): ?InvestigatorType
    {
        return $this->type;
    }

    public function setType(?InvestigatorType $type): void
    {
        $this->type = $type;
    }

    public function getInvestigatorSiteSubmissionTypeVersion(): Collection
    {
        return $this->investigatorSiteSubmissionTypeVersion;
    }

    public function setInvestigatorSiteSubmissionTypeVersion(Collection $investigatorSiteSubmissionTypeVersions): void
    {
        $this->investigatorSiteSubmissionTypeVersion = $investigatorSiteSubmissionTypeVersions;
    }

    public function addInvestigatorSiteSubmissionTypeVersion(InvestigatorSiteSubmissionTypeVersion $investigatorSiteSubmissionTypeVersion): void
    {
        $this->investigatorSiteSubmissionTypeVersion->add($investigatorSiteSubmissionTypeVersion);
    }
}
