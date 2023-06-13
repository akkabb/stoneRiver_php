<?php

class Calculator{
    // public $total;
    /* we change public to protected in order to prevent someone from modify the total */
    protected $total;

    public function add($value) {
        $this->total += $value;
    }

    public function substract($value) {
         $this->total -= $value;
    }

    public function getTotal() {
        return $this->total;
    }
}