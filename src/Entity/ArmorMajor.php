<?php


namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArmorMajorRepository")
 */
class ArmorMajor extends LegendaryEffect
{
    /**
     * @ORM\OneToMany(targetEntity=Armor::class, mappedBy="major")
     */
    private $majoredArmors;

    public function __construct()
    {
        $this->majoredArmors = new ArrayCollection();
    }

    /**
     * @return Collection|Armor[]
     */
    public function getMajoredArmors(): Collection
    {
        return $this->majoredArmors;
    }

    public function addMajoredArmor(Armor $majoredArmor): self
    {
        if (!$this->majoredArmors->contains($majoredArmor)) {
            $this->majoredArmors[] = $majoredArmor;
            $majoredArmor->setMajor($this);
        }

        return $this;
    }

    public function removeMajoredArmor(Armor $majoredArmor): self
    {
        if ($this->majoredArmors->contains($majoredArmor)) {
            $this->majoredArmors->removeElement($majoredArmor);
            // set the owning side to null (unless already changed)
            if ($majoredArmor->getMajor() === $this) {
                $majoredArmor->setMajor(null);
            }
        }

        return $this;
    }
}