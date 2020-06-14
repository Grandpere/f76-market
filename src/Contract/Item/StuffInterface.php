<?php


namespace App\Contract\Item;


interface StuffInterface
{
    public function getLevel();

    // legendaryEffects => prefix, major, minor or none
    // grade => count legendaryEffects

    // TODO : type weapons
    // Ballistic, Submachine guns, Rifles, Shotguns, Pipe, Bows, Heavy, Energy, Plasma, Radiation, Other
    // Explosive (Heavy, Thrown), Melee (One H, Two H, Unarmed)
}