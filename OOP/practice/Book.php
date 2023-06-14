<?php

final class Book extends ProductProtect {
    public function __construct($price)
    {
        $this->_price = $price;
    }

   
}

final class BookConst extends ProductConst {
    const VAT = 0.05;

    public function __construct($price)
    {
        $this->_price = $price;
    }

    /* Because of FINAL in the PARENT i cant OVERWRITE
    public function calculateProductVAT() {
        return $this->_price * self::VAT;
    } */
}