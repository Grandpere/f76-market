<?php

namespace App\Entity;

use App\Repository\SaleStuffRepository;
use App\Traits\Entity\SaleItemEntity;
use App\Traits\Entity\SaleStuffEntity;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Timestampable\Traits\TimestampableEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=SaleStuffRepository::class)
 */
class SaleStuff
{
    use SaleItemEntity;
    use TimestampableEntity;

    /**
     * @ORM\Column(type="smallint")
     * @Assert\Choice(callback={"App\Model\Stuff", "getLevels"}, message="Choose a valid level")
     */
    private $level;

    /**
     * @ORM\Column(type="string", length=20)
     * @Assert\Choice(callback={"App\Model\Stuff", "getTypes"}, message="Choose a valid type")
     */
    private $type;

    /*
    private $legendaryEffect01;
    private $legendaryEffect02;
    private $legendaryEffect03;
    */

    public function __construct()
    {
        $this->quantity = 1;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /*
    public function getLegendaryEffect01(): ?LegendaryEffect
    {
        return $this->legendaryEffect01;
    }

    public function setLegendaryEffect01(?LegendaryEffect $legendaryEffect01): self
    {
        $this->legendaryEffect01 = $legendaryEffect01;

        return $this;
    }

    public function getLegendaryEffect02(): ?LegendaryEffect
    {
        return $this->legendaryEffect02;
    }

    public function setLegendaryEffect02(?LegendaryEffect $legendaryEffect02): self
    {
        $this->legendaryEffect02 = $legendaryEffect02;

        return $this;
    }

    public function getLegendaryEffect03(): ?LegendaryEffect
    {
        return $this->legendaryEffect03;
    }

    public function setLegendaryEffect03(?LegendaryEffect $legendaryEffect03): self
    {
        $this->legendaryEffect03 = $legendaryEffect03;

        return $this;
    }
    */
}
