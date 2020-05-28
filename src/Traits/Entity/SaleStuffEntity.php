<?php


namespace App\Traits\Entity;

use Symfony\Component\Validator\Constraints as Assert;

trait SaleStuffEntity
{
    /**
     * @ORM\Column(type="smallint")
     * @Assert\GreaterThanOrEqual(value="0", message="grade must be greater or equal than 0")
     * @Assert\LessThanOrEqual(value="3", message="grade must be lower or equal than 3")
     */
    private $grade;

    /**
     * @ORM\Column(type="smallint")
     * @Assert\Choice(callback={"App\Model\StuffLevel", "getLevels"}, message="Choose a valid level")
     */
    private $level;

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