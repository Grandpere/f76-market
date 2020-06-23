<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Timestampable\Traits\TimestampableEntity;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

// repository pour les enfants comme fait pour les enfants d'item
/**
 * @ORM\Entity(repositoryClass="App\Repository\LegendaryEffectRepository")
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="category", type="string")
 */
abstract class LegendaryEffect
{
    use TimestampableEntity;

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"legendary:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * @Assert\Length(
     *     min = 6,
     *     max = 255,
     *     minMessage = "Name must be at least {{ limit }} characters long",
     *     maxMessage = "Name cannot be longer than {{ limit }} characters"
     * )
     * @Groups({"legendary:read", "legendary:write"})
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * @Assert\Length(
     *     min = 6,
     *     max = 255,
     *     minMessage = "Description must be at least {{ limit }} characters long",
     *     maxMessage = "Description cannot be longer than {{ limit }} characters"
     * )
     * @Groups({"legendary:read", "legendary:write"})
     */
    private $description;

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
