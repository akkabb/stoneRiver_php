<?php

session_start();

// require_once('lang/english.php');

$allowed_lang = array('english', 'deutsch');

if (isset($_GET['lang']) === true && in_array($_GET['lang'], $allowed_lang) === true) {
    $_SESSION['lang'] = $_GET['lang'];
} else if (isset($_SESSION['lang']) === false) {
    $_SESSION['lang'] = 'english';
}

include 'lang/' . $_SESSION['lang'] . '.php';