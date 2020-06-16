<?php

namespace App\Entity;

use App\Repository\LegendaryEffectRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Timestampable\Traits\TimestampableEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=LegendaryEffectRepository::class)
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="category", type="string")
 * @ORM\DiscriminatorMap({"weapon_prefix" = "WeaponPrefix", "weapon_major" = "WeaponMajor", "weapon_minor" = "WeaponMinor", "armor_prefix" = "ArmorPrefix", "armor_major" = "ArmorMajor", "armor_minor" = "ArmorMinor"})
 */
abstract class LegendaryEffect
{
    use TimestampableEntity;

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * @Assert\Length(
     *     min = 6,
     *     max = 255,
     *     minMessage = "Your name must be at least {{ limit }} characters long",
     *     maxMessage = "Your name cannot be longer than {{ limit }} characters"
     * )
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * @Assert\Length(
     *     min = 6,
     *     max = 255,
     *     minMessage = "Your description must be at least {{ limit }} characters long",
     *     maxMessage = "Your description cannot be longer than {{ limit }} characters"
     * )
     */
    private $description;

    public function __construct()
    {
        $this->weapons = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * return full description => name : description
     * @return string
     */
    public function getFullDescription()
    {
        return sprintf('%s : %s', $this->getName(), $this->getDescription());
    }
}
