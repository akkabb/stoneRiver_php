<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/secureFile.css">
    <title>Secure File Uploading</title>
</head>
<body>
    <main class="main_secureFileUploading">
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="image">
            <input type="submit" value="Upload">
        </form>

        <?php
            print_r($_FILES);
            if (isset($_FILES['image'])) {
                $errors = [];
                $allowed_ext = array('jpg', 'jpeg', 'png', 'gif');

                $file_name = $_FILES['image']['name'];
                $file_ext = strtolower(end(explode('.', $file_name)));

                print_r($file_ext);
                $file_size = $_FILES['image']['size'];
                $file_tmp = $_FILES['image']['tmp_name'];

                if (in_array($file_ext, $allowed_ext) === false) {
                    $errors[] = 'Extension not allowed';
                }

                if ($file_size > 2097152){
                    $errors[] = 'File size must be under 2mb';
                }

                if (empty($errors)) {
                    if (move_uploaded_file($file_tmp, 'images/'.$file_name)) {
                        echo 'File uploaded';
                    }
                }else {
                    foreach($errors as $error){
                        echo $error . '<br>';
                    }
                }
            }
        ?>
    </main>
</body>
</html>