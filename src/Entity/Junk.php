<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\JunkRepository")
 * @ApiResource(
 *     normalizationContext={"groups"={"item:read"}, "swagger_definition_name"="Read"},
 *     denormalizationContext={"groups"={"item:write"}, "swagger_definition_name"="Write"}
 * )
 */
class Junk extends Item
{

}
