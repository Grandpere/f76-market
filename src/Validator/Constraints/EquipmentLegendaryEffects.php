<?php


namespace App\Validator\Constraints;


use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class EquipmentLegendaryEffects extends Constraint
{
    public $message = "";

    public function getTargets()
    {
        return self::CLASS_CONSTRAINT;
    }
}