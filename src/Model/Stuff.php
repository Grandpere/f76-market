<?php


namespace App\Model;


class Stuff
{
    /**
     * @return array
     */
    public static function getLevels()
    {
        return [1, 5, 10, 15, 20, 25, 30, 35, 40, 45, 50];
    }

    /**
     * @return array
     */
    public static function getTypes()
    {
        return ['WEAPON, ARMOR'];
    }
}