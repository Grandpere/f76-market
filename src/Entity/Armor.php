<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArmorRepository")
 */
class Armor extends Equipment
{

    /**
     * @ORM\ManyToOne(targetEntity=ArmorPrefix::class, inversedBy="prefixedArmors")
     */
    private $prefix;

    /**
     * @ORM\ManyToOne(targetEntity=ArmorMajor::class, inversedBy="majoredArmors")
     */
    private $major;

    /**
     * @ORM\ManyToOne(targetEntity=ArmorMinor::class, inversedBy="minoredArmors")
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
