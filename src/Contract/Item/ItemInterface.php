<?php


namespace App\Contract\Item;


interface ItemInterface
{
    /**
     * @return string|null Item name
     */
    public function getName();

    /**
     * @return string|null Item image
     */
    public function getImage();

    /**
     * @return bool Item stackable or not
     */
    public function isStackable();
}