<?php


namespace App\Util;

use App\Entity\Equipment;

class EquipmentChecker
{
    private $grade;

    public function calculateGrade(Equipment $equipment)
    {
        $this->grade = 0;

        // prevent grade calculation if minor without major and major without prefix
        if(null !== $equipment->getPrefix()) {
            $this->grade += 1;
            if(null !== $equipment->getMajor()) {
                $this->grade += 1;
                if(null !== $equipment->getMinor()) {
                    $this->grade += 1;
                }
            }
        }

        return $this->grade;
    }
}