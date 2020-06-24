<?php


namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\WeaponMajorRepository")
 * @ApiResource(
 *     normalizationContext={"groups"={"legendary:read"}, "swagger_definition_name"="Read"},
 *     denormalizationContext={"groups"={"legendary:write"}, "swagger_definition_name"="Write"}
 * )
 */
class WeaponMajor extends LegendaryEffect
{
    /**
     * @ORM\OneToMany(targetEntity=Weapon::class, mappedBy="major")
     */
    private $majoredWeapons;

    public function __construct()
    {
        $this->majoredWeapons = new ArrayCollection();
    }

    /**
     * @return Collection|Weapon[]
     */
    public function getMajoredWeapons(): Collection
    {
        return $this->majoredWeapons;
    }

    public function addMajoredWeapon(Weapon $majoredWeapon): self
    {
        if (!$this->majoredWeapons->contains($majoredWeapon)) {
            $this->majoredWeapons[] = $majoredWeapon;
            $majoredWeapon->setMajor($this);
        }

        return $this;
    }

    public function removeMajoredWeapon(Weapon $majoredWeapon): self
    {
        if ($this->majoredWeapons->contains($majoredWeapon)) {
            $this->majoredWeapons->removeElement($majoredWeapon);
            // set the owning side to null (unless already changed)
            if ($majoredWeapon->getMajor() === $this) {
                $majoredWeapon->setMajor(null);
            }
        }

        return $this;
    }
}