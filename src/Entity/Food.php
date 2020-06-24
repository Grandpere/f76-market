<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FoodRepository")
 * @ApiResource(
 *     normalizationContext={"groups"={"item:read"}},
 *     denormalizationContext={"groups"={"item:write"}}
 * )
 */
class Food extends Item
{

}
