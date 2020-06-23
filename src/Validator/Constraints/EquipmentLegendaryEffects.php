<?php


namespace App\Validator\Constraints;


use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class EquipmentLegendaryEffects extends Constraint
{
    public $message = "This property cannot be null if it's children are not null";

    public function getTargets()
    {
        return self::CLASS_CONSTRAINT;
    }
}