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

    if (isset ($_GET['add'])){
        $quantity = mysqli_query($db, "SELECT id, quantity FROM products WHERE id=" . mysqli_real_escape_string($db,(int)$_GET['add']));
        while ($quantity_row = mysqli_fetch_assoc($quantity))
        {
            if ($quantity_row['quantity'] != $_SESSION['cart_'.(int)$_GET['add']]){
                echo $_SESSION['cart_'.(int)$_GET['add']]+='1';
            }
        }
        header('Location:' .$page);

    }

    if (isset($_GET['remove'])){
        $_SESSION['cart_'.(int)$_GET['remove']]--;
        header('Location:' . $page);
    }
    if (isset($_GET['delete'])){
        $_SESSION['cart_'.(int)$_GET['delete']] = '0';
        header('Location:' . $page);
    }
    
    function products(){
        $db = mysqli_connect('localhost','root','root','cart');
        $get = mysqli_query($db, "SELECT id, name, description, price FROM products WHERE quantity > 0 ORDER BY id DESC");
        if (mysqli_num_rows($get) == 0){
            echo "There are no products to display";
        }else{
            while ($get_row = mysqli_fetch_assoc($get)) {
                echo '<p>'.$get_row['name'].'<br>'.$get_row['description'].'<br>&pound'.number_format($get_row['price'], 2).'<br>'.'<a href="cart.php?add='.$get_row['id'].'">Add</a>'.'</p>';
            }
        }
    }

    function paypal_items(){
        //Watch the video again and do it 
        //Shoping cart part 6 & 7
    }

    function cart(){
        $db = mysqli_connect('localhost','root','root','cart');
        $total = 0;
        foreach ($_SESSION as $name => $value) {
            if ($value > 0) {
                if (substr($name, 0, 5) == 'cart_'){
                    $id = substr($name, 5, (strlen($name)- 5));
                    $get = mysqli_query($db, "SELECT id, name, price FROM products WHERE id=".mysqli_real_escape_string($db,(int)$id));
                    while ($get_row = mysqli_fetch_assoc($get)) {
                        $sub = $get_row['price'] * $value;
                        echo '<div>'.
                        '<p>'
                            .'<span class="display_items">'.$get_row['name']. ' x ' . $value . ' @ &pound' .number_format($get_row['price'], 2) . ' = &pound;' .number_format($sub, 2) .'</span>'
                            .' <a href="cart.php?remove='.$id.'" class="button">-</a>'.' '.'<a href="cart.php?add='.$id.'" class="add_btn button">+</a>'.' '.'<a href="cart.php?delete='.$id.'" class="button del_btn">Delete</a>'
                        .'</p>'
                        .'</div>';
                    }
                }
                $total += $sub;
            }
        }
        if ($total == 0) {
            echo "Your cart is empty.";
        }else{
            // echo '<span class="paypal">Paypal checkout button</span>';
            echo '<span class="display_result">Total = &pound '. number_format($total, 2) .'</span>';
        ?>
        <p>
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post">

            <!-- Saved buttons use the "secure click" command -->
            <input type="hidden" name="cmd" value="_s-xclick">

            <!-- Saved buttons are identified by their button IDs -->
            <input type="hidden" name="hosted_button_id" value="221">

            <!-- Saved buttons display an appropriate button image. -->
            <input type="image" name="submit"
            src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
            alt="PayPal - The safer, easier way to pay online">
            <img alt="" width="1" height="1"
            src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

        </form>
        </p>
        <?php
        }
    }
    // if (isset($_SESSION['cart_1'])){
    //     echo $_SESSION['cart_1'];
    // }
?>