<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

abstract class Equipment extends Stuff
{
    // legendaryEffects => prefix, major, minor or none
    // grade => count legendaryEffects

    // TODO : type weapons
    // Ballistic, Submachine guns, Rifles, Shotguns, Pipe, Bows, Heavy, Energy, Plasma, Radiation, Other
    // Explosive (Heavy, Thrown), Melee (One H, Two H, Unarmed)

    // abstract protected method($variable);

    /**
     * @ORM\Column(type="integer")
     */
    protected $level;

    public function getLevel(): ?int
    {
        return $this->level;
    }

    public function setLevel(int $level): self
    {
        $this->level = $level;

        return $this;
    }
}