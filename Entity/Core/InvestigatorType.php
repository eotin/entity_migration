<?php

namespace App\Entity\Core;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Core\InvestigatorTypeRepository")
 */
class InvestigatorType extends ContactType
{
}
