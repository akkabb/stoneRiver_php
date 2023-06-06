<?php
    session_start();
    require_once('token.php');

    if (isset($_POST['quantity'], $_POST['product'], $_POST['token'])) {
        $product = $_POST['product'];
        $quantity = $_POST['quantity'];

        if (!empty($product) && !empty($quantity)){
            if (Token::check($_POST['token'])) {
                echo 'Process Order';
            }
        }
        
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/crossSite.css">
    <title>Cross site request forgery protection</title>
</head>
<body>
    <main class="main_crossSite">
        <section class="form">
            <form action="" method="post">
                <label for="quantity">Quantity :</label>
                <input type="text" name="quantity" id="">
                <br>
                <input type="submit" value="Order">
                <input type="hidden" name="product" value="1">
                <input type="hidden" name="token" value="<?php echo Token::generate();?>">
            </form>
        </section>
        <?php
        echo $_SESSION['token'];

        ?>
    </main>
    <footer>
        <p class="footer">2023 © Tous droits réservés</p>
    </footer>
</body>
</html>