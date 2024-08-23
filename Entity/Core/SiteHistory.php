<?php

namespace App\Entity\Core;

use App\Entity\History;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class SiteHistory.
 *
 * @ORM\Entity(repositoryClass="App\Repository\Core\SiteHistoryRepository")
 */
class SiteHistory extends History
{
    /**
     * @ORM\ManyToOne(targetEntity="Site", inversedBy="history")
     * @ORM\JoinColumn(name="FK_siteId", referencedColumnName="id", nullable=false)
     */
    protected Site $site;

    /**
     * @var ?Site
     * @ORM\ManyToOne(targetEntity="Site")
     * @ORM\JoinColumn(name="FK_parentSiteId", referencedColumnName="id", nullable=true)
     */
    protected ?Site $parentSite;

    public function getSite(): Site
    {
        return $this->site;
    }

    public function setSite(Site $site): void
    {
        $this->site = $site;
    }

    public function getParentSite(): ?Site
    {
        return $this->parentSite;
    }

    public function setParentSite(?Site $parentSite): void
    {
        $this->parentSite = $parentSite;
    }
}
