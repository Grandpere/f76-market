<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArmorRepository")
 */
class Armor extends Equipment
{
    private $prefix;
    private $major;
    private $minor;


    protected function getPrefix()
    {
        // TODO: Implement getPrefix() method.
    }

    protected function getMajor()
    {
        // TODO: Implement getMajor() method.
    }

    protected function getMinor()
    {
        // TODO: Implement getMinor() method.
    }
}
