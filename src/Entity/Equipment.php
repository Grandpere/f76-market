<?php


namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Timestampable\Traits\TimestampableEntity;

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

    /**
     * @ORM\Column(type="integer")
     */
    protected $grade;

    protected $legendaryEffects;

    public function __construct()
    {
        parent::__construct();
        $this->legendaryEffects = new ArrayCollection();
    }

    public function getLevel(): ?int
    {
        return $this->level;
    }

    public function setLevel(int $level): self
    {
        $this->level = $level;

        return $this;
    }

    public function getGrade(): ?int
    {
        return $this->grade;
    }

    public function setGrade(int $grade): self
    {
        $this->grade = $grade;

        return $this;
    }

    abstract public function getPrefix();
    abstract public function getMajor();
    abstract public function getMinor();
}