<?php


namespace App\EventListener;


use App\Entity\Armor;
use App\Entity\Weapon;
use App\Util\EquipmentChecker;
use Doctrine\Common\Persistence\Event\LifecycleEventArgs;

class EquipmentListener
{
    private $equipmentChecker;

    public function __construct(EquipmentChecker $equipmentChecker)
    {
        $this->equipmentChecker = $equipmentChecker;
    }

    public function prePersist(LifecycleEventArgs $args)
    {
        $this->calculateGrade($args);
    }

    public function preUpdate(LifecycleEventArgs $args)
    {
        $this->calculateGrade($args);
    }

    public function calculateGrade(LifecycleEventArgs $args)
    {
        $entity = $args->getObject();

        if(!$entity instanceof Weapon && !$entity instanceof Armor) {
            return;
        }

        $grade = $this->equipmentChecker->calculateGrade($entity);
        $entity->setGrade($grade);
    }
}