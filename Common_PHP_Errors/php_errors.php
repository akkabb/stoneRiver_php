<?php
    $title = "Common PHP Errors";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
   <?php  require_once('include/head.php');?>
</head>
<body>
    <h1>Common PHP Errors</h1>
    <main class="phpErrors">
        <section class="changingMaximumFileSize">
            <h2>Changing maximum file upload size</h2>
            <p>On <span>php.ini</span> it is possible to modified the info in section "File Uploads" </p>
            <p><strong>Example :</strong> upload_max_filesize = 128M</p>
            <p>The most important is to keep the 'M'</p>
            <img src="img/Capture d'écran 2023-05-08 093325.png" alt="screenshot taken from the course" width="80%">
        </section>
        <section class="cannot_Modify_Header">
            <h2><a href="modifyHeaderInformation.php">Cannot Modify Header Information</a></h2>
            <p>I tried to do the same like the video, but i didnt get an error</p>
            <p>I need to watch the video like a source who can help me when this trouble will happen. <br> Lets go on!</p>
        </section>
        <section class="undefinedIndex">
            <h2><a href="undefined_index.php">undefined index</a></h2>
        </section>
        <section class="unexpected">
            <h2>Unexpected $end</h2>
            <p>It's a video showing the important point of indenting our code. And the example show us nested brackets</p>
            <p>
                Very interesting!!!!
            </p>
        </section>
        <section class="suppliedArgument">
            <h2>Supplied argument not a valid MySQL result resource (MYSQL)</h2>
            <p>Very usefull tips. Nice explanation to find where the errors comes from, and it helps debugging</p>
        </section>
        <section class="accesDenied">
            <h2>Acces denied</h2>
            <p>It concern Mysql. Alex use the function mysql_connect and show us what happen inside phpMyAdmin board ( privileges ) and he's showing us what happen with the script.</p>
        </section>
    </main>
</body>
</html>