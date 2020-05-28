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

    public function __construct()
    {
        $this->quantity = 1;
    }

    /* TODO:
        Prefix : legendaryEffect01 (default null) in ArmorLegendaryEffect
        Major : legendaryEffect02 (default null) in ArmorLegendaryEffect
        Minor : legendaryEffect03 (default null) in ArmorLegendaryEffect
    */
}
