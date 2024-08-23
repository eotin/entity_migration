<?php

namespace App\Entity\Core;

use App\Entity\History;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class InformantHistory.
 *
 * @ORM\Entity(repositoryClass="App\Repository\Core\InformantHistoryRepository")
 */
class InformantHistory extends History
{
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Core\Informant", inversedBy="history")
     * @ORM\JoinColumn(name="FK_informantId", referencedColumnName="id", nullable=false)
     */
    protected Informant $informant;

    /**
     * @var ?Site
     * @ORM\ManyToOne(targetEntity="Site")
     * @ORM\JoinColumn(name="FK_siteId", referencedColumnName="id", nullable=false)
     */
    protected ?Site $site;

    public function getInformant(): Informant
    {
        return $this->informant;
    }

    public function setInformant(Informant $informant): void
    {
        $this->informant = $informant;
    }

    public function getSite(): ?Site
    {
        return $this->site;
    }

    public function setSite(?Site $site): void
    {
        $this->site = $site;
    }
}
