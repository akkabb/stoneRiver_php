<?php
    if (isset($_FILES['upload']) === true){
        $files = $_FILES['upload'];
        for($x = 0; $x < count($files['name']); $x++) {
                $name = $files['name'][$x];
                $tmp_name = $files['tmp_name'] [$x];

        // move_uploaded_file($tmp_name, /*path*/);
        }
        // var_dump($files);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple File Uploading</title>
</head>
<body>
    <div class="form">
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="upload[]" multiple> <!---using multiple attribut instead of having multiple input --->
            <input type="file" name="upload[]" id="">
            <input type="submit" value="upload">
        </form>
    </div>
</body>
</html>