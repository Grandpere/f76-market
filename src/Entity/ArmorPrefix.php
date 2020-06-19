<?php


namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArmorPrefixRepository")
 */
class ArmorPrefix extends LegendaryEffect
{
    /**
     * @ORM\OneToMany(targetEntity=Armor::class, mappedBy="prefix")
     */
    private $prefixedArmors;

    public function __construct()
    {
        $this->prefixedArmors = new ArrayCollection();
    }

    /**
     * @return Collection|Armor[]
     */
    public function getPrefixedArmors(): Collection
    {
        return $this->prefixedArmors;
    }

    public function addPrefixedArmor(Armor $prefixedArmor): self
    {
        if (!$this->prefixedArmors->contains($prefixedArmor)) {
            $this->prefixedArmors[] = $prefixedArmor;
            $prefixedArmor->setPrefix($this);
        }

        return $this;
    }

    public function removePrefixedArmor(Armor $prefixedArmor): self
    {
        if ($this->prefixedArmors->contains($prefixedArmor)) {
            $this->prefixedArmors->removeElement($prefixedArmor);
            // set the owning side to null (unless already changed)
            if ($prefixedArmor->getPrefix() === $this) {
                $prefixedArmor->setPrefix(null);
            }
        }

        return $this;
    }
}