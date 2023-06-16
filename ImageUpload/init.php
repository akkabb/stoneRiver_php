<?php
ob_start();
session_start();

// $dsn = 'mysql:dbname=visualupload;host=127.0.0.1';
// $user = 'root';
// $password = 'root';

$db = mysqli_connect('localhost', 'root', 'root', 'visualupload');
// if (isset($db)) {
//     echo "Ya!";
// }


include 'func/user.func.php';
include 'func/album.func.php';
include 'func/image.func.php';