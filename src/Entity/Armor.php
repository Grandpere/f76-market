<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArmorRepository")
 * @ApiResource(
 *     normalizationContext={"groups"={"item:read", "equipment:read", "armor:read"}},
 *     denormalizationContext={"groups"={"item:write", "equipment:write", "armor:write"}}
 * )
 */
class Armor extends Equipment
{

    /**
     * @ORM\ManyToOne(targetEntity=ArmorPrefix::class, inversedBy="prefixedArmors")
     * @Groups({"armor:read", "armor:write"})
     */
    private $prefix;

    /**
     * @ORM\ManyToOne(targetEntity=ArmorMajor::class, inversedBy="majoredArmors")
     * @Groups({"armor:read", "armor:write"})
     */
    private $major;

    /**
     * @ORM\ManyToOne(targetEntity=ArmorMinor::class, inversedBy="minoredArmors")
     * @Groups({"armor:read", "armor:write"})
     */
    private $minor;

    public function getPrefix(): ?ArmorPrefix
    {
        return $this->prefix;
    }

    public function setPrefix(?ArmorPrefix $prefix): self
    {
        $this->prefix = $prefix;

        return $this;
    }

    public function getMajor(): ?ArmorMajor
    {
        return $this->major;
    }

    public function setMajor(?ArmorMajor $major): self
    {
        $this->major = $major;

        return $this;
    }

    public function getMinor(): ?ArmorMinor
    {
        return $this->minor;
    }

    public function setMinor(?ArmorMinor $minor): self
    {
        $this->minor = $minor;

        return $this;
    }
}
