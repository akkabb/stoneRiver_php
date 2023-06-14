<?php

class ProductOne{
    protected $type;
    protected $price;

    public function __construct($type, $price)
    {
        $this->type = $type;
        $this->price = $price;
    }
    public function getProductType(){
        return $this->type;
    }
    public function getProductPrice(){
        return $this->price;
    }
}