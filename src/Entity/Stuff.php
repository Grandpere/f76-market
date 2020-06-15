<?php

namespace App\Entity;

abstract class Stuff extends Item
{
    public function __construct()
    {
        $this->stackable = false;
    }
}
