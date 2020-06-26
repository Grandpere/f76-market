<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AmmunitionRepository")
 * @ApiResource(
 *     normalizationContext={"groups"={"item:read"}, "swagger_definition_name"="Read"},
 *     denormalizationContext={"groups"={"item:write"}, "swagger_definition_name"="Write"}
 * )
 */
class Ammunition extends Item
{
    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="ammunitions")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"item:read", "item:write"})
     */
    private $owner;

    public function getOwner(): ?User
    {
        return $this->owner;
    }

    public function setOwner(?User $owner): self
    {
        $this->owner = $owner;

        return $this;
    }
}
