<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FoodRepository")
 * @ApiResource(
 *     normalizationContext={"groups"={"item:read"}, "swagger_definition_name"="Read"},
 *     denormalizationContext={"groups"={"item:write"}, "swagger_definition_name"="Write"}
 * )
 */
class Food extends Item
{

}
