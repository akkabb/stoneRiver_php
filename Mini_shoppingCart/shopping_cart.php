<?php
    $title = 'Shopping cart';
    require_once('cart.php');
?>
<head>
    <?php require_once('include/head.php');?>
</head>
<body>
    <main class="main_ShoppingCart">
    <?php 
        echo products();
        echo cart();
    ?>
    </main>
    <footer>
        <p class="footer">2023 © Tous droits réservés</p>
    </footer>
</body>
</html>