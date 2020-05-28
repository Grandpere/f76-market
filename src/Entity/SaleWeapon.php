<?php

namespace App\Entity;

use App\Repository\SaleWeaponRepository;
use App\Traits\Entity\SaleItemEntity;
use App\Traits\Entity\SaleStuffEntity;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Timestampable\Traits\TimestampableEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=SaleWeaponRepository::class)
 */
class SaleWeapon
{
    use SaleItemEntity;
    use SaleStuffEntity;
    use TimestampableEntity;
}
