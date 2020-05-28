<?php


namespace App\Entity;

use App\Repository\ItemRepository;
use App\Traits\Entity\SaleItemEntity;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Timestampable\Traits\TimestampableEntity;

/**
 * @ORM\Entity(repositoryClass=SaleItemRepository::class)
 */
class SaleItem
{
    use SaleItemEntity;
    use TimestampableEntity;
}
