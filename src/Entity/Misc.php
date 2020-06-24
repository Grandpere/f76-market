<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MiscRepository")
 * @ApiResource(
 *     normalizationContext={"groups"={"item:read"}, "swagger_definition_name"="Read"},
 *     denormalizationContext={"groups"={"item:write"}, "swagger_definition_name"="Write"}
 * )
 */
class Misc extends Item
{

}
