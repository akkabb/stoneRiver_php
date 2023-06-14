<?php

class DB{
    protected $_link, $_result, $_numRows;

    public function __construct($server, $username, $password, $db)
    {
        $this->_link = new PDO($server, $username, $password, $db);
    }

    // public function tryCatch(){
    //     try {
    //         $db = new PDO('mysql:host=localhost;dbname=oop_db', $user, $pass);
    //         foreach($db->query('SELECT * from FOO') as $row) {
    //             print_r($row);
    //         }
    //         $db = null;
    //     } catch (PDOException $e) {
    //         print "Erreur !: " . $e->getMessage() . "<br/>";
    //         die();
    //     }
    // }

    public function disconnect() {
        $this->_link = null;
    }
    
    public function query($sql) {
        $this->_result = $this->query($sql);
        $this->_numRows = $this->_result;
    }

    public function numRows() {
        return $this->_numRows;
    }


    public function rows() {
        $rows = array();
        for($x = 0; $x < $this->numRows(); $x++) {
            $rows[] = (PDO::FETCH_ASSOC);
        }
        return $rows;
    }
}