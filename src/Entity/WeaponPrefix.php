<?php


namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\WeaponPrefixRepository")
 * @ApiResource(
 *     normalizationContext={"groups"={"legendary:read"}},
 *     denormalizationContext={"groups"={"legendary:write"}}
 * )
 */
class WeaponPrefix extends LegendaryEffect
{
    /**
     * @ORM\OneToMany(targetEntity=Weapon::class, mappedBy="prefix")
     */
    private $prefixedWeapons;

    public function __construct()
    {
        $this->prefixedWeapons = new ArrayCollection();
    }

    /**
     * @return Collection|Weapon[]
     */
    public function getPrefixedWeapons(): Collection
    {
        return $this->prefixedWeapons;
    }

    public function addPrefixedWeapon(Weapon $prefixedWeapon): self
    {
        if (!$this->prefixedWeapons->contains($prefixedWeapon)) {
            $this->prefixedWeapons[] = $prefixedWeapon;
            $prefixedWeapon->setPrefix($this);
        }

        return $this;
    }

    public function removePrefixedWeapon(Weapon $prefixedWeapon): self
    {
        if ($this->prefixedWeapons->contains($prefixedWeapon)) {
            $this->prefixedWeapons->removeElement($prefixedWeapon);
            // set the owning side to null (unless already changed)
            if ($prefixedWeapon->getPrefix() === $this) {
                $prefixedWeapon->setPrefix(null);
            }
        }

        return $this;
    }
}