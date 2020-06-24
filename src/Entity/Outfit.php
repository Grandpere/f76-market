<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OutfitRepository")
 * @ApiResource(
 *     normalizationContext={"groups"={"item:read"}},
 *     denormalizationContext={"groups"={"item:write"}}
 * )
 */
class Outfit extends Stuff
{

}
