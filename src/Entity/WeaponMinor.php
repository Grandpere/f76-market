<?php


namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\WeaponMinorRepository")
 * @ApiResource(
 *     normalizationContext={"groups"={"legendary:read"}, "swagger_definition_name"="Read"},
 *     denormalizationContext={"groups"={"legendary:write"}, "swagger_definition_name"="Write"}
 * )
 */
class WeaponMinor extends LegendaryEffect
{
    /**
     * @ORM\OneToMany(targetEntity=Weapon::class, mappedBy="minor")
     */
    private $minoredWeapons;

    public function __construct()
    {
        $this->minoredWeapons = new ArrayCollection();
    }

    /**
     * @return Collection|Weapon[]
     */
    public function getMinoredWeapons(): Collection
    {
        return $this->minoredWeapons;
    }

    public function addMinoredWeapon(Weapon $minoredWeapon): self
    {
        if (!$this->minoredWeapons->contains($minoredWeapon)) {
            $this->minoredWeapons[] = $minoredWeapon;
            $minoredWeapon->setMinor($this);
        }

        return $this;
    }

    public function removeMinoredWeapon(Weapon $minoredWeapon): self
    {
        if ($this->minoredWeapons->contains($minoredWeapon)) {
            $this->minoredWeapons->removeElement($minoredWeapon);
            // set the owning side to null (unless already changed)
            if ($minoredWeapon->getMinor() === $this) {
                $minoredWeapon->setMinor(null);
            }
        }

        return $this;
    }
}