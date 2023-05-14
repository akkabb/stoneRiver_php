<?php
    $title = "Album.php";
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once'include/head.php';?>
</head>
<body>
    <!-- <img src="data/thumbs/valley-7972374_640.jpg" alt=""> -->
    <?php
        $page = $_SERVER['PHP_SELF'];

        //Settings
        $column = 5;

        //directories
        $base = "data";
        $thumbs = "thumbs";

        // get album
        $get_album = $_GET['album'];

        //if no album selected

        if (!$get_album)
        {
            echo "<p><b>Select an album :</b></p>";
            //find each album and display as links
            $handle = opendir($base);
            while (false !== ($file = readdir(($handle))))
            {
                if (is_dir($base."/".$file) && $file != "." && $file != ".." && $file != $thumbs)
                {
                    echo "<a href='$page?album=$file'>".$file."</a><br>";
                }
            }
            closedir($handle);
         }else // if album selected
        {
            //check if album exists, and additionnal security checks
            if (!is_dir($base."/".$get_album) || (strstr($get_album, ".") != NULL) || (strstr($get_album, "/") != NULL) || (strstr($get_album, "\\") !=NULL))
                echo "Album does't exist.";
            else{
                echo "<p><b>".$get_album."</b></p>";
                $x = 0;
                // open album directory to display each image
                $handle = opendir($base."/".$get_album);
                while (($file = readdir($handle)) !== FALSE)
                {
                    if ($file != "." && $file != "..")
                    {
                        echo "<img src='$base/$get_album/$file'>";
                        // $x++;

                        // if ($x == $column)
                        // {
                        //     $x = 0;
                        //     echo "<br>";
                        // }
                    }
                }
                closedir($handle);
            }
         }
    ?>
</body>
</html>