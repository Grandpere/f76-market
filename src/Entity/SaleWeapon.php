<?php

namespace App\Entity;

use App\Repository\SaleWeaponRepository;
use App\Traits\Entity\SaleItemEntity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=SaleWeaponRepository::class)
 */
class SaleWeapon
{
    use SaleItemEntity;

    /**
     * @ORM\Column(type="smallint")
     * @Assert\GreaterThanOrEqual(value="0", message="grade must be greater or equal than 0")
     * @Assert\LessThanOrEqual(value="3", message="grade must be lower or equal than 3")
     */
    private $grade;

    public function __construct()
    {
        $this->grade = 0;
    }

    /**
     * @return int|null
     */
    public function getGrade(): ?int
    {
        return $this->grade;
    }

    /**
     * @param int $grade
     * @return $this
     */
    public function setGrade(int $grade): self
    {
        $this->grade = $grade;

        return $this;
    }
}
