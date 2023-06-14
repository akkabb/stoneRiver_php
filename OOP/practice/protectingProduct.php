<?php
class ProductProtect{
    protected $_price;

    final public function calculateProductVAT() {
        return $this->_price * 0.20;
    }

}

class ProductConst{
    protected $_price;

    final public function calculateProductVAT() {
        return $this->_price * 0.20;
    }

}