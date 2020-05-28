<?php

namespace App\Entity;

use App\Repository\SaleArmorRepository;
use App\Traits\Entity\SaleItemEntity;
use App\Traits\Entity\SaleStuffEntity;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Timestampable\Traits\TimestampableEntity;

/**
 * @ORM\Entity(repositoryClass=SaleArmorRepository::class)
 */
class SaleArmor
{
    use SaleItemEntity;
    use SaleStuffEntity;
    use TimestampableEntity;
}
