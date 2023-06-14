<?php

class ExBook extends ExtendingProduct {
    protected $_isbn;

    public function __construct($type, $price, $isbn)
    {
        parent::__construct($type, $price);
        $this->_isbn = $isbn;
    }
    // public function setProductIsbn($isbn) {
    //     $this->_isbn = $isbn;
    // }

    public function getProductIsbn() {
        return $this->_isbn;
    }
}