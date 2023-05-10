<?php
$title = "File Uploading";
if (isset($_FILES['upload'])){
    move_uploaded_file($_FILES['upload']['tmp_name'], "files/{$_FILES['upload']['name']}");
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once('include/head.php');?>
</head>
<body>
    <h2>File uploading</h2>
    <main class="main_fileUploading">
        <div class="code_display">
            <pre>
                &lt?php 

                ?&qt 
            </pre>
        </div>
    <p>
        <?php
            if (isset($_FILES['upload']['name'])){
                echo '<a href="files/', $_FILES['upload']['name'], '">View Image</a>';
            }
        ?>
    </p>
   <div>
    <form action="" method="post" enctype="multipart/form-data">
        <p>
            <input type="file" name="upload">
            <input type="submit" name="Upload">
        </p>
    </form>
   </div>
    </main>
    <footer>
        <p class="footer">2023 © Tous droits réservés</p>
    </footer>
</body>
</html>