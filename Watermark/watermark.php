<?php
    require_once('images.func.php');

    if (isset($_FILES['image'])) {
        $files_name = $_FILES['image']['name'];
        $files_tmp = $_FILES['image']['tmp_name'];

        if (allowed_image($files_name)) {
            // watermark image
            // echo '<p>Allowed</p>';
            $file_name = md5(microtime(true)).'.png';
            watermark_image($file_tmp, 'images/uploads/'.$file_name);

            echo '<p><a href="images/uploads/', $file_name, '">Click here to view watermarked image</a></p>';
        } else {
            echo '<p>Not an image, or image type not accepted.<p>';
        }
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/watermark.css">
    <title>Watermark an image on upload</title>
</head>
<body>
    <main class="main_watermark">
        <?php 

        ?>

        <section class="form">
            <form action="" method="post" enctype="multipart/form-data">
                <label for="image">Choose an image :</label>
                <input type="file" name="image" id="">
                <input type="submit" value="Watermark">
            </form>
        </section>
    </main>
    <footer>
        <p class="footer">2023 © Tous droits réservés</p>
    </footer>
</body>
</html>