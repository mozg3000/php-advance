<?php

namespace app\models;

class Product extends Item{

    /**
     * Product constructor.
     * @param $input ассоциативный массив, где ключи name, price, description
     */
    public function __construct(array $input)
    {
        parent::__construct($input);
    }

    public function sell ($quantity){

        self::$marja += $this->getTax()*$quantity*$this->getPrice();
    }

}