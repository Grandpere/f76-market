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

    public function calculateGrade(): self
    {
        $this->grade = count($this->legendaryEffects);

        return $this;
    }

    public function getLegendaryEffects()
    {
        return $this->legendaryEffects;
    }

    public function addLegendaryEffect(LegendaryEffect $legendaryEffect): self
    {
        if($this->getGrade() < 3) {
            if(!$this->legendaryEffects->contains($legendaryEffect)) {
                $this->legendaryEffects[] = $legendaryEffect;
            }
        }

        return $this;
    }

    public function removeLegendaryEffect(LegendaryEffect $legendaryEffect): self
    {
        if($this->legendaryEffects->contains($legendaryEffect)) {
            $this->legendaryEffects->removeElement($legendaryEffect);
        }

        return $this;
    }

    abstract protected function getPrefix();
    abstract protected function getMajor();
    abstract protected function getMinor();
}