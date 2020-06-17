<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\WeaponRepository")
 */
class Weapon extends Equipment
{
    /**
     * @ORM\ManyToOne(targetEntity=WeaponPrefix::class, inversedBy="prefixedWeapons")
     */
    private $prefix;

    /**
     * @ORM\ManyToOne(targetEntity=WeaponMajor::class, inversedBy="majoredWeapons")
     */
    private $major;

    /**
     * @ORM\ManyToOne(targetEntity=WeaponMinor::class, inversedBy="minoredWeapons")
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