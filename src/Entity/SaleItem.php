<?php

namespace App\Entity;

use App\Repository\ItemRepository;
use App\Traits\Entity\SaleItemEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SaleItemRepository::class)
 */
class SaleItem
{
    use SaleItemEntity;
}
