<?php

namespace App\Entity\Export\DTO;

use JMS\Serializer\Annotation as JMS;

class FileExportDTO
{
    /**
     * @JMS\Expose()
     *
     * @var int
     */
    public $id;

    /**
     * @JMS\Expose()
     *
     * @var \DateTime
     */
    public $creationDate;

    /**
     * @JMS\Expose()
     *
     * @var string
     */
    public $name;

    /**
     * @JMS\Expose()
     *
     * @var string
     */
    public $shortName;

    /**
     * @JMS\Expose()
     *
     * @var string
     */
    public $path;

    /**
     * @JMS\Expose()
     *
     * @var string
     */
    public $status;

    /**
     * @JMS\Expose()
     *
     * @var bool
     */
    public $canBeDeleted;
}
