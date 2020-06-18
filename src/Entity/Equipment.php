<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Validator\Constraints as CustomAssert;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @CustomAssert\EquipmentLegendaryEffects
 */
abstract class Equipment extends Stuff
{
    // TODO : type weapons for filter legendary effect forbidden with some type but doesn't using with this application
    // Ballistic, Submachine guns, Rifles, Shotguns, Pipe, Bows, Heavy, Energy, Plasma, Radiation, Other
    // Explosive (Heavy, Thrown), Melee (One H, Two H, Unarmed)

    /**
     * @ORM\Column(type="integer")
     * @Assert\Choice(callback="getLevels", message="Choose a valid level")
     */
    protected $level;

    /**
     * @ORM\Column(type="integer")
     * @Assert\PositiveOrZero
     */
    protected $grade;

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

    /**
     * return an level array
     * @return array
     */
    public static function getLevels()
    {
        return [1, 5, 10, 15, 20, 25, 30, 35, 40, 45, 50];
    }
}