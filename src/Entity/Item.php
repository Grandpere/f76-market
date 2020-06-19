<?php

namespace App\Entity;

use App\Contract\Item\ItemInterface;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Timestampable\Traits\TimestampableEntity;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ItemRepository")
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="category", type="string")
 */
abstract class Item implements ItemInterface
{
    use TimestampableEntity;

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"item:read"})
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * @Assert\Length(
     *     min = 6,
     *     max = 255,
     *     minMessage = "Name must be at least {{ limit }} characters long",
     *     maxMessage = "Name cannot be longer than {{ limit }} characters"
     * )
     * @Groups({"item:read", "item:write"})
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"item:read", "item:write"})
     */
    // nullable = true sera retiré à la fin quand l'upload sera en place
    protected $image;

    /**
     * @ORM\Column(type="boolean")
     * @Groups({"item:read", "item:write"})
     */
    protected $stackable = true;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @see ItemInterface
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @see ItemInterface
     * @return string|null
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @see ItemInterface
     * @return boolean
     */
    public function isStackable(): ?bool
    {
        return $this->stackable;
    }
}
