<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\WeaponRepository")
 */
class Weapon extends Equipment
{
    // TODO: modifier les inversedBy pour les différents attributs légendaires
    private $prefix;
    private $major;
    private $minor;

    protected function getPrefix()
    {
        // TODO: Implement getPrefix() method.
    }

    protected function getMajor()
    {
        // TODO: Implement getMajor() method.
    }

    protected function getMinor()
    {
        // TODO: Implement getMinor() method.
    }

    /*
    public function getPrefix(): ?LegendaryEffect
    {
        return $this->prefix;
    }

    public function setPrefix(?LegendaryEffect $prefix): self
    {
        $this->prefix = $prefix;

        return $this;
    }

    public function getMajor(): ?LegendaryEffect
    {
        return $this->major;
    }

    public function setMajor(?LegendaryEffect $major): self
    {
        $this->major = $major;

        return $this;
    }

    public function getMinor(): ?LegendaryEffect
    {
        return $this->minor;
    }

    public function setMinor(?LegendaryEffect $minor): self
    {
        $this->minor = $minor;

        return $this;
    }
    */
}