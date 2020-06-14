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
 */
class LegendaryEffect
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
     *     minMessage = "Your content must be at least {{ limit }} characters long",
     *     maxMessage = "Your content cannot be longer than {{ limit }} characters"
     * )
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * @Assert\Length(
     *     min = 6,
     *     max = 255,
     *     minMessage = "Your content must be at least {{ limit }} characters long",
     *     maxMessage = "Your content cannot be longer than {{ limit }} characters"
     * )
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=20)
     * @Assert\Choice(callback="getCategories", message="Choose a valid category")
     */
    private $category;

    /**
     * @ORM\Column(type="string", length=20)
     * @Assert\Choice(callback={"App\Model\Stuff", "getTypes"}, message="Choose a valid type")
     */
    private $type;

    private $saleStuffs;

    public function __construct()
    {
        $this->saleStuffs = new ArrayCollection();
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCategory(): ?string
    {
        return $this->category;
    }

    /**
     * @param string $category
     * @return $this
     */
    public function setCategory(string $category): self
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return $this
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /*
    public function getSaleStuffs(): Collection
    {
        return $this->saleStuffs;
    }

    public function addSaleStuff(SaleStuff $saleStuff): self
    {
        if (!$this->saleStuffs->contains($saleStuff)) {
            $this->saleStuffs[] = $saleStuff;
            $saleStuff->setLegendaryEffect01($this);
        }

        return $this;
    }

    public function removeSaleStuff(SaleStuff $saleStuff): self
    {
        if ($this->saleStuffs->contains($saleStuff)) {
            $this->saleStuffs->removeElement($saleStuff);
            // set the owning side to null (unless already changed)
            if ($saleStuff->getLegendaryEffect01() === $this) {
                $saleStuff->setLegendaryEffect01(null);
            }
        }

        return $this;
    }
    */

    /**
     * return full description => title : description
     * @return string
     */
    public function getFullDescription()
    {
        return sprintf('%s : %s', $this->getTitle(), $this->getDescription());
    }

    /**
     * @return array
     */
    public static function getCategories()
    {
        return ['PREFIX, MAJOR, MINOR'];
    }
}
