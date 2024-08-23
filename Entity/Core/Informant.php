<?php

namespace App\Entity\Core;

use App\Entity\HistoryInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Informant.
 *
 * @ORM\Entity(repositoryClass="App\Repository\Core\InformantRepository")
 */
class Informant extends Contact implements HistoryInterface
{
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected ?string $imei = null;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected ?string $imei2 = null;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected ?string $lastUsedGateway = null;

    /**
     * @ORM\ManyToOne(targetEntity="Site", inversedBy="informants")
     * @ORM\JoinColumn(name="FK_siteId", referencedColumnName="id", nullable=false)
     */
    protected Site $site;

    /**
     * @ORM\ManyToOne(targetEntity="InformantType")
     * @ORM\JoinColumn(name="FK_typeId", nullable=true)
     */
    protected ?InformantType $type = null;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Core\InformantHistory", mappedBy="informant", cascade={"persist"})
     */
    protected Collection $history;

    public function __construct()
    {
        $this->history = new ArrayCollection();
        $this->setEnabled(true);
    }

    public function getImei(): ?string
    {
        return $this->imei;
    }

    public function setImei(string $imei): void
    {
        $this->imei = $imei;
    }

    public function getImei2(): ?string
    {
        return $this->imei2;
    }

    public function setImei2(?string $imei2): void
    {
        $this->imei2 = $imei2;
    }

    public function getLastUsedGateway(): ?string
    {
        return $this->lastUsedGateway;
    }

    public function setLastUsedGateway(?string $lastUsedGateway): void
    {
        $this->lastUsedGateway = $lastUsedGateway;
    }

    public function getSite(): Site
    {
        return $this->site;
    }

    public function setSite(Site $site): void
    {
        $this->site = $site;
    }

    public function getType(): ?InformantType
    {
        return $this->type;
    }

    public function setType(?InformantType $type): void
    {
        $this->type = $type;
    }

    public function getHistory(): Collection
    {
        return $this->history;
    }

    public function setHistory(Collection $history): void
    {
        $this->history = $history;
    }

    /** Other properties **/

    /**
     * Used to define date of activation when creating entity.
     */
    private ?\DateTime $activationDate = null;

    public function getActivationDate(): ?\DateTime
    {
        return $this->activationDate;
    }

    public function setActivationDate(?\DateTime $activationDate): void
    {
        $this->activationDate = $activationDate;
    }
}
