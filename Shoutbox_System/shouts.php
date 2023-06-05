<?php

require_once 'connect.php';

$q = mysqli_query($db, "SELECT `users`.`username`, `shouts`.`user_id`, `shouts`.`message`, `shouts`.`name`
                        FROM `users`
                        INNER JOIN `shouts` ON `users`.`id` = `shouts`.`user_id`
                        ORDER BY `shouts`.`id` DESC
                        LIMIT 20
");

$shouts = [];

while ($r = mysqli_fetch_assoc($q)) {
    $shouts [] = array(
        'user_id' = $r['user_id'],
        'username' = $r['username'],
        'message' = $r['message'],
        'name' = $r['name'],
    );
}
foreach ($shouts as $s) {
    echo $s['username'] . ' - ' . $s['message'] . '<br>';
}