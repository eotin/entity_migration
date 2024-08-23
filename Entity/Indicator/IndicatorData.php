<?php

namespace App\Entity\Indicator;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Indicator\IndicatorDataRepository")
 * @ORM\Table(
 *	uniqueConstraints={
 *		@ORM\UniqueConstraint(name="indicator_data_udx", columns={"site_id", "calendar_id", "scope_id", "informant_id"}),
 *		@ORM\UniqueConstraint(name="indicator_data_hash_udx", columns={"hash", "calendar_id"})
 *	},
 *	indexes={
 *      @ORM\Index(columns={"hash"}),
 *      @ORM\Index(columns={"site_id"}),
 *      @ORM\Index(columns={"calendar_id"}),
 *      @ORM\Index(columns={"scope_id"}),
 *      @ORM\Index(columns={"informant_id"})
 *  }
 * )
 *
 * Class IndicatorData
 */
class IndicatorData
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue()
     */
    private $id;

    /**
     * @var float
     * @ORM\Column(type="float", nullable=true)
     */
    private $value;

    /**
     * @var float
     * @ORM\Column(type="float", nullable=true)
     */
    private $numerator;

    /**
     * @var float
     * @ORM\Column(type="float", nullable=true)
     */
    private $denominator;

    /**
     * @var int
     * @ORM\Column(type="integer", nullable=true)
     */
    private $siteId;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    private $calendarId;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    private $scopeId;

    /**
     * @var int
     * @ORM\Column(type="integer", nullable=true)
     */
    private $informantId;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $hash;
}
