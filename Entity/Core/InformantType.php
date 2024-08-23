<?php

namespace App\Entity\Core;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Core\InformantTypeRepository")
 */
class InformantType extends ContactType
{
}
