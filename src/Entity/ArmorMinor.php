<?php


namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArmorMinorRepository")
 * @ApiResource(
 *     normalizationContext={"groups"={"legendary:read"}, "swagger_definition_name"="Read"},
 *     denormalizationContext={"groups"={"legendary:write"}, "swagger_definition_name"="Write"}
 * )
 */
class ArmorMinor extends LegendaryEffect
{
    /**
     * @ORM\OneToMany(targetEntity=Armor::class, mappedBy="minor")
     */
    private $minoredArmors;

    public function __construct()
    {
        $this->minoredArmors = new ArrayCollection();
    }

    /**
     * @return Collection|Armor[]
     */
    public function getMinoredArmors(): Collection
    {
        return $this->minoredArmors;
    }

    public function addMinoredArmor(Armor $minoredArmor): self
    {
        if (!$this->minoredArmors->contains($minoredArmor)) {
            $this->minoredArmors[] = $minoredArmor;
            $minoredArmor->setMinor($this);
        }

        return $this;
    }

    public function removeMinoredArmor(Armor $minoredArmor): self
    {
        if ($this->minoredArmors->contains($minoredArmor)) {
            $this->minoredArmors->removeElement($minoredArmor);
            // set the owning side to null (unless already changed)
            if ($minoredArmor->getMinor() === $this) {
                $minoredArmor->setMinor(null);
            }
        }

        return $this;
    }
}