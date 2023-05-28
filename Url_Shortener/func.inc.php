<?php
include ('db.inc.php');


function is_min($url) {
    return (preg_match("/min\.bz/i", $url)) ? true : false;
}


function gen_code() {
    $charset = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    return substr(str_shuffle($charset), 0, 6);
}


function code_exists($code) {
    $db = mysqli_connect('localhost', 'root', 'root', 'shortener');
    $code = mysqli_real_escape_string($db, $code);
    $code_exists = mysqli_query($db, "SELECT COUNT(`url_id`) FROM `urls` WHERE `code`= '$code'");
    // mysql_result difficult to find the equivalen in mysqli
    // return (mysqli_result($db, $code_exists, 0) == 1) ? true : false;
}

function shorten($url, $code) {
    $db = mysqli_connect('localhost', 'root', 'root', 'shortener');
    $url = mysqli_real_escape_string($db, $url);
    $url = mysqli_real_escape_string($db, $code);
    mysqli_query($db, "INSERT INTO `urls` VALUES ('', '$url', '$code')");
    return $code;
}

function redirect($code) {
    $db = mysqli_connect('localhost', 'root', 'root', 'shortener');
    $code = mysqli_real_escape_string($db, $code);
    if (code_exists($code)) {
        $url_query = mysqli_query($db, "SELECT `url` FROM `urls` WHERE `code`= '$code'");
        $url = mysqli_result($db, $url_query);
        header('Location: '.$url);
    }
}