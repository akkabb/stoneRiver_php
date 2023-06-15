<?php
require_once('../init.php');
function logged_in() {

}

function login_check($email, $password) {

}

function user_data() {

}
function user_register($email, $name, $password) {

}

function user_exists($email) {
    $query = ("SELECT COUNT(`user_id`) FROM `users` WHERE `email`= '$email'");
}