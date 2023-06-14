<?php
class Count{
    protected static $_count;

    // public function __construct() {
    //     // $this->_count++; with static we change 
    //     self::$_count++;
    // }

    public function getCount() {
        // return $this->_count; It was before we use static
        return self::$_count;
    }

    public static function increment(){
        self::$_count++;
    }
}