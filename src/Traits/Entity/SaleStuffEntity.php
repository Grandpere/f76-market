<?php


namespace App\Traits\Entity;

use App\Entity\SaleWeapon;
use Symfony\Component\Validator\Constraints as Assert;

trait SaleStuffEntity
{
    /**
     * @ORM\Column(type="smallint")
     * @Assert\GreaterThanOrEqual(value="0", message="grade must be greater or equal than 0")
     * @Assert\LessThanOrEqual(value="3", message="grade must be lower or equal than 3")
     */
    private $grade = 0;

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