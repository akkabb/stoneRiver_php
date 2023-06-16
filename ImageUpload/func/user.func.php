<?php
function logged_in() {
    return isset($_SESSION['user_id']);
}

function login_check($email, $password) {

}

function user_data() {

}
function user_register($email, $name, $password) {
    $db = mysqli_connect('localhost', 'root', 'root', 'visualupload');
    $email = mysqli_real_escape_string($db, $email);
    $query =  "INSERT INTO `users` VALUES ('','$email', '$name', '".md5($password)."')";
    mysqli_query($db,$query);
    return mysqli_insert_id($db);
}

function user_exists($email) {
    $db = mysqli_connect('localhost', 'root', 'root', 'visualupload');
    $email = mysqli_real_escape_string($db, $email);
    $query = mysqli_query($db, "SELECT COUNT(`user_id`) FROM `users` WHERE `email`= '$email'");
    $row = mysqli_fetch_array($query, MYSQLI_ASSOC);
    return($row == 1) ? true : false;
}