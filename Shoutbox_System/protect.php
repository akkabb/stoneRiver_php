<?php
function protect($v){
    $db = mysqli_connect('localhost', 'root', 'root', 'shoutbox');

    $v = mysqli_real_escape_string($db, $v);
    $v = htmlentities($v);
    $v = trim($v);

    return $v;
}

