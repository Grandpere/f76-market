<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass="App\Repository\WeaponRepository")
 * @ApiResource(
 *     normalizationContext={"groups"={"item:read", "equipment:read", "weapon:read"}, "swagger_definition_name"="Read"},
 *     denormalizationContext={"groups"={"item:write", "equipment:write", "weapon:write"}, "swagger_definition_name"="Write"}
 * )
 */
class Weapon extends Equipment
{
    /**
     * @ORM\ManyToOne(targetEntity=WeaponPrefix::class, inversedBy="prefixedWeapons")
     * @Groups({"weapon:read", "weapon:write"})
     */
    private $prefix;

    /**
     * @ORM\ManyToOne(targetEntity=WeaponMajor::class, inversedBy="majoredWeapons")
     * @Groups({"weapon:read", "weapon:write"})
     */
    private $major;

    /**
     * @ORM\ManyToOne(targetEntity=WeaponMinor::class, inversedBy="minoredWeapons")
     * @Groups({"weapon:read", "weapon:write"})
     */
    private $minor;

    public function getPrefix(): ?WeaponPrefix
    {
        return $this->prefix;
    }

    public function setPrefix(?WeaponPrefix $prefix): self
    {
        $this->prefix = $prefix;

        return $this;
    }

    public function getMajor(): ?WeaponMajor
    {
        return $this->major;
    }

    public function setMajor(?WeaponMajor $major): self
    {
        $this->major = $major;

        return $this;
    }

    public function getMinor(): ?WeaponMinor
    {
        return $this->minor;
    }

    public function setMinor(?WeaponMinor $minor): self
    {
        $this->minor = $minor;

        return $this;
    }
}