<?php
    session_start();

    $page = 'shopping_cart.php';
    $db = mysqli_connect('localhost','root','root','cart');
    
    //check connection
    // if ($db){
        //     echo 'done';
        // }else{
            //     echo 'fix that';
            // }
    function products(){
        $db = mysqli_connect('localhost','root','root','cart');
        $get = mysqli_query($db, "SELECT id, name, description, price FROM products WHERE quantity > 0 ORDER BY id DESC");
        if (mysqli_num_rows($get)){

        }
    }
?>