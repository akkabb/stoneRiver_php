<?php

class Product{
    public $type;

    public function setProductType($value){
        $this->type = $value;
    }
    public function getProductType() {
        return $this->type;
    }
}