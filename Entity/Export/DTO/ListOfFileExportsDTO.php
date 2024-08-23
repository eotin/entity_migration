<?php

namespace App\Entity\Export\DTO;

use JMS\Serializer\Annotation as JMS;

class ListOfFileExportsDTO
{
    /**
     * @JMS\Expose()
     */
    public bool $exportEnabled;

    /**
     * @JMS\Expose()
     */
    public int $maxNbOfExports;

    /**
     * @JMS\Expose()
     *
     * @var FileExportDTO[]
     */
    public array $downloadsList;
}
