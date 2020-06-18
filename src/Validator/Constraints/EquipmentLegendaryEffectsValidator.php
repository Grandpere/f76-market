<?php


namespace App\Validator\Constraints;


use App\Entity\Equipment;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class EquipmentLegendaryEffectsValidator extends ConstraintValidator
{

    /** a valid equipment :
     * no prefix and no major and no minor
     * prefix and major and minor
     * prefix and major
     * prefix
     *
     * an invalid equipment :
     * no prefix and major
     * no prefix and major and minor
     * no prefix and no major and minor
     * prefix and no major and minor
     *
     * @inheritDoc
     * @var Equipment $equipment
     * @var EquipmentLegendaryEffects $constraint
     */
    public function validate($equipment, Constraint $constraint)
    {
        if(null !== $equipment->getMinor()) {
            if(null === $equipment->getMajor()) {
                $this->context->buildViolation($constraint->message)
                    ->atPath('major')
                    ->addViolation();
            }
            if(null === $equipment->getPrefix()) {
                $this->context->buildViolation($constraint->message)
                    ->atPath('prefix')
                    ->addViolation();
            }
        }
        if(null !== $equipment->getMajor()) {
            if(null === $equipment->getPrefix()) {
                $this->context->buildViolation($constraint->message)
                    ->atPath('prefix')
                    ->addViolation();
            }
        }
    }
}