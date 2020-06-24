<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PlanRepository")
 * @ApiResource(
 *     normalizationContext={"groups"={"item:read"}},
 *     denormalizationContext={"groups"={"item:write"}}
 * )
 */
class Plan extends Item
{

}
